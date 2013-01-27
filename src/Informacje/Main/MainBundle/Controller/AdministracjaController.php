<?php

namespace Informacje\Main\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Informacje\Main\MainBundle\Entity\Login;
use Informacje\Main\MainBundle\Entity\Strona;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Form;


class AdministracjaController extends Controller
{
    /** @Route("/Login/") @Template() */
    public function LoginAction(){
		$login = new Login();
		$form = $this->createFormBuilder($login)
		->add('name','text',array('label'=>' Nazwa użytkownika '))
		->add('password','password',array('label'=>' Hasło '))
		->getForm();
		
		if ($this->getRequest()->getMethod() === 'POST') {
			$form->bindRequest($this->getRequest());
				if ($form->isValid()) {							
				
				$username = $form["name"]->getData();
                $password = $form["password"]->getData();
	            $repo = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Login')->findOneByName("$username");
				
					if ($repo->getName()==$username && $repo->getPassword()==$password){
						$session  = $this->get("session");
						$session->set('name', $username);
						return $this->redirect('Dodaj');
					} else {
							$session->set('name', $username);
							$session  = $this->set('name','gość');
				            }
			    }
		}
        return array('form'=> $form->createView());
    }
	
	/** @Route("/Login/Dodaj") @Template() */
    public function LoginDodajAction() {
	$session  = $this->get("session");                                  // Zabezpieczenie ( sesja ))
	if (($session->get('name')=='')||($session->get('name')=='gość')) { return $this->redirect("/"); }
	
	$strona = new Strona();
	$form = $this->createFormBuilder($strona)
	->add('header1', 'textarea', array ('label'=>'Nagłówek na strone główną', 'required'=>true,'max_length'=>60))
	->add('header2', 'textarea', array ('label'=>'Duży nagłówek w artykule', 'required'=>false ))
	->add('header3', 'textarea', array ('label'=>'Mały nagłówek w artykule', 'required'=>false ))
	->add('content', 'textarea', array ('label'=>'Treść artykułu', 'required'=>false ))
	->add('file1', 'file', array ('label'=>'zdjęcie do galerii','required'=>false))
	->add('description1', 'textarea', array ('label'=>'Opis do zdjęcia', 'required'=>false ))
	->add('file2', 'file', array ('label'=>'zdjęcie do galerii','required'=>false))
	->add('description2', 'textarea', array ('label'=>'Opis do zdjęcia', 'required'=>false ))
	->add('file3', 'file', array ('label'=>'zdjęcie do galerii','required'=>false))
	->add('description3', 'textarea', array ('label'=>'Opis do zdjęcia', 'required'=>false ))
	->add('file4', 'file', array ('label'=>'zdjęcie do galerii','required'=>false))
	->add('description4', 'textarea', array ('label'=>'Opis do zdjęcia', 'required'=>false ))
	->add('file5', 'file', array ('label'=>'zdjęcie do galerii','required'=>false))
	->add('description5', 'textarea', array ('label'=>'Opis do zdjęcia', 'required'=>false ))
	->add('file6', 'file', array ('label'=>'zdjęcie do galerii','required'=>false))
	->add('description6', 'textarea', array ('label'=>'Opis do zdjęcia', 'required'=>false ))
	->add('file7', 'file', array ('label'=>'zdjęcie do galerii','required'=>false))
	->add('description7', 'textarea', array ('label'=>'Opis do zdjęcia', 'required'=>false ))
	->add('file8', 'file', array ('label'=>'zdjęcie do galerii','required'=>false))
	->add('description8', 'textarea', array ('label'=>'Opis do zdjęcia', 'required'=>false ))
	->add('file9', 'file', array ('label'=>'zdjęcie do galerii','required'=>false))
	->add('description9', 'textarea', array ('label'=>'Opis do zdjęcia', 'required'=>false ))
	->add('file10', 'file', array ('label'=>'zdjęcie do galerii','required'=>false))
	->add('description10', 'textarea', array ('label'=>'Opis do zdjęcia', 'required'=>false ))
	->add('rodzaj', 'choice', array(
         'choices'   => array('w' => 'Wiadomości', 's' => 'Sport','b'=>'Business','r'=>'Rozmaitości','z'=>'Rozrywka'),
         'required'  => true,
		 'expanded'=>true,
		 'multiple'=>false ))
	->getForm();
			
			if ($this->getRequest()->getMethod() === 'POST') {
			$form->bindRequest($this->getRequest());
				if ($form->isValid()) {
				$em = $this->getDoctrine()->getEntityManager();
				
				$em->persist($strona);
				$em->flush();
				return $this -> redirect($this->generateUrl('informacje_main_main_administracja_logindodaj'),301);
				}
			}
	
	
	
	
        return array('form'=>$form->createView());
    }
	
	/** @Route("/Login/Usun") @Template() */
    public function LoginUsunAction() {
	
	$wiadomości = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findByRodzaj('w');
	$sport = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findByRodzaj('s');
	$biznes = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findByRodzaj('b');
	$rozmaitosci = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findByRodzaj('r');
	$rozrywka = $this->getDoctrine()->getRepository('InformacjeMainMainBundle:Strona')->findByRodzaj('z');
	
	
	
	return array('wiadomości'=>$wiadomości,'sport'=>$sport,'biznes'=>$biznes,
				 'rozmaitosci'=>$rozmaitosci,'rozrywka'=>$rozrywka);
	}
	
}
