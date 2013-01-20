<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'informacje_main_main_administracja_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Informacje\\Main\\MainBundle\\Controller\\AdministracjaController::LoginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Login/',    ),  ),),
        'informacje_main_main_administracja_logindodaj' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Informacje\\Main\\MainBundle\\Controller\\AdministracjaController::LoginDodajAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Login/Dodaj',    ),  ),),
        'informacje_main_main_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Informacje\\Main\\MainBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        'informacje_main_main_default_strona' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'Informacje\\Main\\MainBundle\\Controller\\DefaultController::stronaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]+',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/Strona',    ),  ),),
        'informacje_main_main_default_ajax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Informacje\\Main\\MainBundle\\Controller\\DefaultController::ajaxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajax',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
