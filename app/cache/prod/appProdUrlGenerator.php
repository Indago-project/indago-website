<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'Indago_compte_home_page' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Indago\\CompteBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Indago_compte_rendermenusite' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Indago\\CompteBundle\\Controller\\DefaultController::renderMenuSiteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/render-menu-site',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Indago_compte_rendermenu_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Indago\\CompteBundle\\Controller\\DefaultController::renderMenuUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/render-menu-user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Indago_compte_rendermenu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Indago\\CompteBundle\\Controller\\DefaultController::renderMenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/render-menu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Indago\\CompteBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Indago\\CompteBundle\\Controller\\DefaultController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Indago_general_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Indago\\GeneralBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/Accueil/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Indago_profil_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Indago\\GeneralBundle\\Controller\\DefaultController::profilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/Profil/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Indago_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Indago\\GeneralBundle\\Controller\\DefaultController::EnvoieMailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/contacter-mois',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Indago_general_commen_ca_marche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Indago\\GeneralBundle\\Controller\\DefaultController::CommentCaMarcheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/comment_ca_marche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Indago_general_aide' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Indago\\GeneralBundle\\Controller\\DefaultController::AideAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/aide',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Indago_search_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Indago\\SearchBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/recherche-mot-cle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Indago_search_event' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Indago\\SearchBundle\\Controller\\DefaultController::eventSearchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/recherche-evenement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
