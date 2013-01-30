<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // informacje_main_main_administracja_login
        if (rtrim($pathinfo, '/') === '/Login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'informacje_main_main_administracja_login');
            }

            return array (  '_controller' => 'Informacje\\Main\\MainBundle\\Controller\\AdministracjaController::LoginAction',  '_route' => 'informacje_main_main_administracja_login',);
        }

        // informacje_main_main_administracja_logindodaj
        if ($pathinfo === '/Login/Dodaj') {
            return array (  '_controller' => 'Informacje\\Main\\MainBundle\\Controller\\AdministracjaController::LoginDodajAction',  '_route' => 'informacje_main_main_administracja_logindodaj',);
        }

        // informacje_main_main_administracja_loginusun
        if ($pathinfo === '/Login/Usun') {
            return array (  '_controller' => 'Informacje\\Main\\MainBundle\\Controller\\AdministracjaController::LoginUsunAction',  '_route' => 'informacje_main_main_administracja_loginusun',);
        }

        // informacje_main_main_ajax_sonda
        if ($pathinfo === '/sonda') {
            return array (  '_controller' => 'Informacje\\Main\\MainBundle\\Controller\\AjaxController::sondaAction',  '_route' => 'informacje_main_main_ajax_sonda',);
        }

        // informacje_main_main_ajax_wyniki
        if ($pathinfo === '/wyniki') {
            return array (  '_controller' => 'Informacje\\Main\\MainBundle\\Controller\\AjaxController::wynikiAction',  '_route' => 'informacje_main_main_ajax_wyniki',);
        }

        // informacje_main_main_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'informacje_main_main_default_index');
            }

            return array (  '_controller' => 'Informacje\\Main\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'informacje_main_main_default_index',);
        }

        // informacje_main_main_default_strona
        if (0 === strpos($pathinfo, '/Strona') && preg_match('#^/Strona/(?P<slug>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Informacje\\Main\\MainBundle\\Controller\\DefaultController::stronaAction',)), array('_route' => 'informacje_main_main_default_strona'));
        }

        // informacje_main_main_default_ajax
        if ($pathinfo === '/ajax') {
            return array (  '_controller' => 'Informacje\\Main\\MainBundle\\Controller\\DefaultController::ajaxAction',  '_route' => 'informacje_main_main_default_ajax',);
        }

        // informacje_main_main_default_komentarz
        if ($pathinfo === '/komentarz') {
            return array (  '_controller' => 'Informacje\\Main\\MainBundle\\Controller\\DefaultController::komentarzAction',  '_route' => 'informacje_main_main_default_komentarz',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
