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
use Informacje\Main\MainBundle\Entity\Popularity;
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
	
	
	/* Najpopularniejsze - tablica z id stron */
	$em = $this-> getDoctrine()->getManager();
	$query = "SELECT strona_id_id strona, COUNT(strona_id_id) count FROM popularity GROUP BY strona_id_id ORDER BY count DESC";
	$najpopularniejsze = array();
	$result = $em->getConnection()->query($query);
	while ($row = $result->fetch()) {
	    $najpopularniejsze[] = $row['strona'];
	 }
	// var_dump($najpopularniejsze);
	$popularne = array();
	if( isset($najpopularniejsze[0]) && isset($najpopularniejsze[1]) && isset($najpopularniejsze[2]) && isset($najpopularniejsze[3]) && isset($najpopularniejsze[4])) { 
	$popularne[0] = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findOneById($najpopularniejsze[0]); 
	$popularne[1] = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findOneById($najpopularniejsze[1]); 
	$popularne[2] = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findOneById($najpopularniejsze[2]); 
	$popularne[3] = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findOneById($najpopularniejsze[3]); 
	$popularne[4] = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findOneById($najpopularniejsze[4]); 
	} 
	return array('wiadomości'=>$wiadomości,'sport'=>$sport,'biznes'=>$biznes, 'pogoda'=>$pogoda,
				 'rozmaitosci'=>$rozmaitosci,'rozrywka'=>$rozrywka, 'popularne'=>$popularne);
    }
	
	/** @Route("/Strona/{slug}") @Template() */
    public function stronaAction($slug) {
	            // POPULARITY
	$browser = $_SERVER['HTTP_USER_AGENT'];
	$find_browser = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Popularity')->findOneBy(array('browser'=>$browser,'strona_id'=>$slug));
	$find_strona = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findOneById($slug);

	if($find_browser==null) {
	$em = $this->getDoctrine()->getEntityManager();
	$popularity = new Popularity();
	$popularity->setBrowser($browser);
	$popularity->setStronaId($find_strona);
	$em ->persist($popularity);
	$em ->flush();
	}
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
	// blokada na 2 komentarze
	if ( $find_browser->getCommentNumber() < 3 ){
		if ($request->request->has('form1name')) {
			$form->bindRequest($this->getRequest());
			if ($form->isValid()) {			 
				$em = $this->getDoctrine()->getEntityManager(); 
				$strona=$this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findOneById($slug);
				$komentarz->setKomentarz($form["komentarz"]->getData());
				$komentarz->setPodpis($form["podpis"]->getData());
				$komentarz->setStrona($strona);
				$em -> persist($komentarz);
				$comment_number = $find_browser->getCommentNumber() + 1;
				$find_browser->setCommentNumber($comment_number);
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
				$komentarz2->setParent($komentarz);
				$em -> persist($komentarz2);
				$comment_number = $find_browser->getCommentNumber() + 1;
				$find_browser->setCommentNumber($comment_number);
				$em -> flush();
				return $this -> redirect($this->generateUrl('informacje_main_main_default_strona', array('slug'=>$slug)),301);
		    }}
	} else { 
	echo "<hr/><h5 style='color:red; text-align:center' >Wysłałeś już 2 komentarze. Limit został wykorzystany</h5><hr/>" ;	}
	}
	
				// SONDAŻ - WYNIKI
	$em = $this-> getDoctrine()->getManager();
	$query = "SELECT SUM(plus) plus ,SUM(minus) minus FROM sonda1";
	$wyniki = array();
	$result = $em->getConnection()->query($query);
	while ($row = $result->fetch()) {
	    $wyniki['plus'] = $row['plus'];
	    $wyniki['minus'] = $row['minus'];
	 }
	 
	
				// KOMENTARZE -LISTING
	$komentarze =$this->getDoctrine()->getRepository('InformacjeMainMainBundle:Komentarz')->findByStrona($slug);
		if( !null == $komentarze ){
	$komentarze2 =$this->getDoctrine()->getRepository('InformacjeMainMainBundle:Komentarz2')->findByParent($komentarze);
		} else $komentarze2 = null;

	return array('wiadomość'=>$wiadomość,'files'=>$files, 'form'=>$form->createView(), 'wyniki'=>$wyniki,
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

		$em = $this->getDoctrine()->getManager();
		$komentarz = $em->getRepository('InformacjeMainMainBundle:Komentarz')->findOneById($id);
		
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
		}} 
		
		// OCENA 2 ( ocena odpowiedzi do komentarza )
		
	    if(isset($_POST['ocena2'])){ 
		$id = $_POST['id'];             
	    $ocena = $_POST['ocena2'];	

		$em = $this->getDoctrine()->getManager();
		$komentarz2 = $em->getRepository('InformacjeMainMainBundle:Komentarz2')->findOneById($id);
		
		$browser = $_SERVER['HTTP_USER_AGENT'];
		$query = $em->createQuery(
		'SELECT v FROM InformacjeMainMainBundle:Visitor2 v WHERE v.browser = :browser AND v.komentarz2 = :komentarz2'
		)->setParameters(array('browser' => $browser , 'komentarz2' => $komentarz2));
		$match = $query->getResult();
		if ( $match == null ){
	
			 if ($ocena=='plus'){
			 $plus = $komentarz2->getPlus(); $plus++;
			 $komentarz2->setPlus($plus); echo "$plus";
			 }
			 if ($ocena=='minus'){
			 $minus = $komentarz2->getMinus(); $minus++;
			 $komentarz2->setMinus($minus); echo "$minus";
			 }
			
			$visitor2 = new Visitor2();
			$browser = $_SERVER['HTTP_USER_AGENT'];
			$visitor2->setBrowser($browser);
			$visitor2->setKomentarz2($komentarz2);
			$em -> persist($visitor2);	
			$em -> flush();	
		
				} else { if ($ocena=='plus'){ $plus = $komentarz2->getPlus(); echo "oddałeś już głos";}
			     if ($ocena=='minus'){ $minus = $komentarz2->getMinus(); echo "oddałeś już głos";}
			}} 
		return array();
		
		} // is_ajax ends
	
	return array();
	}
		

	
	/** @Route("/komentarz") @Template() */
	public function komentarzAction(){
	
	/* Najpopularniejsze - tablica z id stron */
	$em = $this-> getDoctrine()->getManager();
	$query = "SELECT strona_id_id strona, COUNT(*) count FROM popularity GROUP BY strona_id_id ORDER BY count DESC";
	$najpopularniejsze = array();
	$result = $em->getConnection()->query($query);
	  while ($row = $result->fetch()) {
	    $najpopularniejsze[] = $row['strona'];
	  }

	
	return array();
	}
	
}	