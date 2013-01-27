<?php

namespace Informacje\Main\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Informacje\Main\MainBundle\Entity\Strona;
use Symfony\Component\HttpFoundation\Session\Session;
use Informacje\Main\MainBundle\Entity\Komentarz;
use Informacje\Main\MainBundle\Entity\Komentarz2;
use Informacje\Main\MainBundle\Entity\Visitor;
use Informacje\Main\MainBundle\Entity\Visitor2;
use Symfony\Component\Form\FormFactory;
use Informacje\Main\MainBundle\Form\KomentarzType;
use Informacje\Main\MainBundle\Form\Komentarz2Type;
use Symfony\Component\Form\FormTypeInterface;

class DefaultController extends Controller
{
    /** @Route("/") @Template() */
    public function indexAction() {
	
	$wiadomości = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findByRodzaj('w');
	$sport = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findByRodzaj('s');
	$biznes = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findByRodzaj('b');
	$rozmaitosci = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findByRodzaj('r');
	$rozrywka = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findByRodzaj('z');
	
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
			   // POGODA
	$xml = simplexml_load_file('http://free.worldweatheronline.com/feed/weather.ashx?q=77.236.7.129&format=xml&num_of_days=3&key=8eb41b738b154111122509');
    $pogoda = array();
	$pogoda[0]=$xml->current_condition->weatherIconUrl;
	$pogoda[1]=$xml->current_condition->temp_C.'°C';
	$pogoda[2]=$xml->weather[1]->weatherIconUrl;
	$pogoda[3]='od '.$xml->weather[1]->tempMinC.' do '.$xml->weather[1]->tempMaxC.'°C';
	$pogoda[4]=$xml->weather[2]->weatherIconUrl;
	$pogoda[5]='od '.$xml->weather[2]->tempMinC.' do '.$xml->weather[2]->tempMaxC.'°C';
	
	return array('wiadomości'=>$wiadomości,'sport'=>$sport,'biznes'=>$biznes, 'pogoda'=>$pogoda,
				 'rozmaitosci'=>$rozmaitosci,'rozrywka'=>$rozrywka);
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
	$komentarztype = new KomentarzType();
	$form=$this->get('form.factory')->createNamedBuilder('form1name',$komentarztype)
	     ->add('komentarz','textarea',array('required'=>true))
		 ->add('podpis','text', array('required'=>true))
		 ->getForm();
		 
	$komentarz2 = new Komentarz2();
	$komentarz2type = new Komentarz2Type();
	$form2=$this->get('form.factory')->createNamedBuilder('form2name',$komentarz2type )
	     ->add('komentarz','textarea',array('required'=>true))
		 ->add('podpis','text', array('required'=>true))
		 ->add('hidden', 'hidden', array( 'data' => 'id',))
		 ->getForm();	 
	$request = $this->getRequest();	 
	if ($this->getRequest()->getMethod() === 'POST') {
	     if ($request->request->has('form1name')) {
			$form->bindRequest($this->getRequest());
			if ($form->isValid()) {			 
				$em = $this->getDoctrine()->getEntityManager(); 
				$strona=$this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findOneById($slug);
				$komentarz->setKomentarz($form["komentarz"]->getData());
				$komentarz->setPodpis($form["podpis"]->getData());
				$komentarz->setStrona($strona);
				$em -> persist($komentarz);
				$em -> flush();	
				return $this -> redirect($this->generateUrl('informacje_main_main_default_strona', array('slug'=>$slug)),301);
			}}	
		if ($request->request->has('form2name')) {
			$form2->bindRequest($this->getRequest());
			if ($form2->isValid()) {		
				$em = $this->getDoctrine()->getEntityManager(); 
				$komentarz_id = $form2["hidden"]->getData();
				$komentarz=$this->getDoctrine()->getRepository('InformacjeMainMainBundle:Komentarz')->findOneById($komentarz_id);
				
				$komentarz2->setKomentarz($form2["komentarz"]->getData());
				$komentarz2->setPodpis($form2["podpis"]->getData());
				//var_dump($form2);
				$komentarz2->setParent($komentarz);
				$em -> persist($komentarz2);
				$em -> flush();
				return $this -> redirect($this->generateUrl('informacje_main_main_default_strona', array('slug'=>$slug)),301);
		    }}
	}
		 
				// KOMENTARZE -LISTING
	$komentarze =$this->getDoctrine()->getRepository('InformacjeMainMainBundle:Komentarz')->findByStrona($slug);
		if( !null == $komentarze ){
	$komentarze2 =$this->getDoctrine()->getRepository('InformacjeMainMainBundle:Komentarz2')->findByParent($komentarze);
		} else $komentarze2 = null;

	return array('wiadomość'=>$wiadomość,'files'=>$files, 'form'=>$form->createView(),
	             'form2'=>$form2->createView(),'komentarze'=>$komentarze,'komentarze2'=>$komentarze2 );
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
		

	
	/** @Route("/komentarz") */
	public function komentarzAction(){
	
	
	
	
	
	}
	
}	