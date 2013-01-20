<?php

namespace Informacje\Main\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Informacje\Main\MainBundle\Entity\Strona;
use Symfony\Component\HttpFoundation\Session\Session;
use Informacje\Main\MainBundle\Entity\Komentarz;
use Informacje\Main\MainBundle\Entity\Visitor;

class DefaultController extends Controller
{
    /** @Route("/") @Template() */
    public function indexAction() {
	
	$wiadomości = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findByRodzaj('w');
	$sport = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findByRodzaj('s');
	$biznes = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findByRodzaj('b');
	
	            // GET UNIQUE BROWSER AND PERSIST TO DATABASE 
	$browser = $_SERVER['HTTP_USER_AGENT'];
	$find_browser = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Visitor')->findOneByBrowser($browser);
	if($find_browser==null) {
	$em = $this->getDoctrine()->getEntityManager();
	$visitor = new Visitor();
	$visitor->setBrowser($browser);
	$em ->persist($visitor);
	$em ->flush();
	}
    return array('wiadomości'=>$wiadomości,'sport'=>$sport,'biznes'=>$biznes);
    }
	
	/** @Route("/Strona/{slug}") @Template() */
    public function stronaAction($slug) {
				// WIADOMOŚCI
	 $wiadomość=$this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findOneById($slug);	
	$files=array();
    if ($wiadomość->getPath1() != null ){ $files[] = $wiadomość->getPath1();}
    if ($wiadomość->getPath2() != null ){ $files[] = $wiadomość->getPath2();}
    if ($wiadomość->getPath3() != null ){ $files[] = $wiadomość->getPath3();}
    if ($wiadomość->getPath4() != null ){ $files[] = $wiadomość->getPath4();}
    if ($wiadomość->getPath5() != null ){ $files[] = $wiadomość->getPath5();}
    if ($wiadomość->getPath6() != null ){ $files[] = $wiadomość->getPath6();}
    if ($wiadomość->getPath7() != null ){ $files[] = $wiadomość->getPath7();}
    if ($wiadomość->getPath8() != null ){ $files[] = $wiadomość->getPath8();}
    if ($wiadomość->getPath9() != null ){ $files[] = $wiadomość->getPath9();}
    if ($wiadomość->getPath10() != null ){ $files[] = $wiadomość->getPath10();}

				//KOMENTARZE - DODAWANIE	
	$komentarz = new Komentarz();
	$form=$this->createFormBuilder($komentarz)
	     ->add('komentarz','textarea',array('required'=>true))
		 ->add('podpis','text', array('required'=>true))
		 ->getForm();
		 
	if ($this->getRequest()->getMethod() === 'POST') {
	$form->bindRequest($this->getRequest());
		if ($form->isValid()) {			 
		$em = $this->getDoctrine()->getEntityManager(); 
		$strona=$this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findOneById($slug);
		$komentarz->setStrona($strona);
		$em -> persist($komentarz);
		$em -> flush();	
		return $this -> redirect($this->generateUrl('informacje_main_main_default_strona', array('slug'=>$slug)),301);
		}
	}	 
				// KOMENTARZE -LISTING
	$komentarze =$this->getDoctrine()->getRepository('InformacjeMainMainBundle:Komentarz')->findByStrona($slug);
   
	return array('wiadomość'=>$wiadomość,'files'=>$files, 'form'=>$form->createView(),'komentarze'=>$komentarze);
	}
	
	
	/** @Route("/ajax") @Template() */
    public function ajaxAction() {
	
		           //GET UNIQUE BROWSER AND PERSIST TO DATABASE 
	$browser = $_SERVER['HTTP_USER_AGENT'];
	$find_browser = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Visitor')->findOneByBrowser($browser);
	if($find_browser==null) {
	$em = $this->getDoctrine()->getEntityManager();
	$visitor = new Visitor();
	$visitor->setBrowser($browser);
	$em ->persist($visitor);
	$em ->flush();
	}
	$visitor = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Visitor')->findOneByBrowser($browser);
	
					// AJAX - OCENA KOMENTARZA
  	$isAjax = $this->get('Request')->isXMLHttpRequest();
    if ($isAjax) {     
		 if(isset($_POST['ocena'])){
		$id = $_POST['id'];              // id komentarza
	    $ocena = $_POST['ocena'];		 // ocena (string) plus/minus
		//dodajemy do komentarza ocene oraz ?
		$em = $this->getDoctrine()->getManager();
		$komentarz = $em->getRepository('InformacjeMainMainBundle:Komentarz')->findOneById($id);
		
		//$komentarz_id = $komentarz->getId();
		//$visitor = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Visitor')->findOneByBrowser($browser);
		$browser = $_SERVER['HTTP_USER_AGENT'];
		$query = $em->createQuery(
		'SELECT v FROM InformacjeMainMainBundle:Visitor v WHERE v.browser = :browser AND v.komentarz = :komentarz'
		)->setParameters(array('browser' => $browser , 'komentarz' => $komentarz));
		$match = $query->getResult();
		if ( $match == null ){
		// GET VISITOR BROWSER AND nr komentarza 	
			 if ($ocena=='plus'){
			 $plus = $komentarz->getPlus(); $plus++;
			 $komentarz->setPlus($plus); echo "$plus";
			 }
			 if ($ocena=='minus'){
			 $minus = $komentarz->getMinus(); $minus++;
			 $komentarz->setMinus($minus); echo "$minus";
			 }
			
			$visitor = new Visitor();
			$browser = $_SERVER['HTTP_USER_AGENT'];
			$visitor->setBrowser($browser);
			$visitor->setKomentarz($komentarz);
			$em -> persist($visitor);	
			$em -> flush();	
		
		} else { if ($ocena=='plus'){ $plus = $komentarz->getPlus(); echo "oddałeś już głos";}
			     if ($ocena=='minus'){ $minus = $komentarz->getMinus(); echo "oddałeś już głos";}
		}} else { echo "no-ajax";}
		}
	
	return array();
	//}
	
	//return array();
	}
	
	
}
