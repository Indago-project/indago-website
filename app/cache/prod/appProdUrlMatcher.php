<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        // Indago_compte_home_page
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'Indago_compte_home_page');
            }

            return array (  '_controller' => 'Indago\\CompteBundle\\Controller\\DefaultController::loginAction',  '_route' => 'Indago_compte_home_page',);
        }

        if (0 === strpos($pathinfo, '/render-menu')) {
            if (0 === strpos($pathinfo, '/render-menu-')) {
                // Indago_compte_rendermenusite
                if ($pathinfo === '/render-menu-site') {
                    return array (  '_controller' => 'Indago\\CompteBundle\\Controller\\DefaultController::renderMenuSiteAction',  '_route' => 'Indago_compte_rendermenusite',);
                }

                // Indago_compte_rendermenu_user
                if ($pathinfo === '/render-menu-user') {
                    return array (  '_controller' => 'Indago\\CompteBundle\\Controller\\DefaultController::renderMenuUserAction',  '_route' => 'Indago_compte_rendermenu_user',);
                }

            }

            // Indago_compte_rendermenu
            if ($pathinfo === '/render-menu') {
                return array (  '_controller' => 'Indago\\CompteBundle\\Controller\\DefaultController::renderMenuAction',  '_route' => 'Indago_compte_rendermenu',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Indago\\CompteBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Indago\\CompteBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'logout',);
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // Indago_general_homepage
            if (rtrim($pathinfo, '/') === '/user/Accueil') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Indago_general_homepage');
                }

                return array (  '_controller' => 'Indago\\GeneralBundle\\Controller\\DefaultController::indexAction',  '_route' => 'Indago_general_homepage',);
            }

            // Indago_profil_homepage
            if (rtrim($pathinfo, '/') === '/user/Profil') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Indago_profil_homepage');
                }

                return array (  '_controller' => 'Indago\\GeneralBundle\\Controller\\DefaultController::profilAction',  '_route' => 'Indago_profil_homepage',);
            }

            if (0 === strpos($pathinfo, '/user/co')) {
                // Indago_contact
                if ($pathinfo === '/user/contacter-mois') {
                    return array (  '_controller' => 'Indago\\GeneralBundle\\Controller\\DefaultController::EnvoieMailAction',  '_route' => 'Indago_contact',);
                }

                // Indago_general_commen_ca_marche
                if ($pathinfo === '/user/comment_ca_marche') {
                    return array (  '_controller' => 'Indago\\GeneralBundle\\Controller\\DefaultController::CommentCaMarcheAction',  '_route' => 'Indago_general_commen_ca_marche',);
                }

            }

            // Indago_general_aide
            if ($pathinfo === '/user/aide') {
                return array (  '_controller' => 'Indago\\GeneralBundle\\Controller\\DefaultController::AideAction',  '_route' => 'Indago_general_aide',);
            }

            if (0 === strpos($pathinfo, '/user/recherche-')) {
                // Indago_search_homepage
                if ($pathinfo === '/user/recherche-mot-cle') {
                    return array (  '_controller' => 'Indago\\SearchBundle\\Controller\\DefaultController::indexAction',  '_route' => 'Indago_search_homepage',);
                }

                // Indago_search_event
                if ($pathinfo === '/user/recherche-evenement') {
                    return array (  '_controller' => 'Indago\\SearchBundle\\Controller\\DefaultController::eventSearchAction',  '_route' => 'Indago_search_event',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
