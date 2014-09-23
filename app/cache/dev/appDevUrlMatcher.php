<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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

        if (0 === strpos($pathinfo, '/Accueil')) {
            // Indago_general_homepage
            if (rtrim($pathinfo, '/') === '/Accueil/Accueil') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Indago_general_homepage');
                }

                return array (  '_controller' => 'Indago\\GeneralBundle\\Controller\\DefaultController::indexAction',  '_route' => 'Indago_general_homepage',);
            }

            // Indago_profil_homepage
            if (rtrim($pathinfo, '/') === '/Accueil/Profil') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Indago_profil_homepage');
                }

                return array (  '_controller' => 'Indago\\GeneralBundle\\Controller\\DefaultController::profilAction',  '_route' => 'Indago_profil_homepage',);
            }

            if (0 === strpos($pathinfo, '/Accueil/co')) {
                // Indago_contact
                if ($pathinfo === '/Accueil/contacter-mois') {
                    return array (  '_controller' => 'Indago\\GeneralBundle\\Controller\\DefaultController::EnvoieMailAction',  '_route' => 'Indago_contact',);
                }

                // Indago_general_commen_ca_marche
                if ($pathinfo === '/Accueil/comment_ca_marche') {
                    return array (  '_controller' => 'Indago\\GeneralBundle\\Controller\\DefaultController::CommentCaMarcheAction',  '_route' => 'Indago_general_commen_ca_marche',);
                }

            }

            // Indago_general_aide
            if ($pathinfo === '/Accueil/aide') {
                return array (  '_controller' => 'Indago\\GeneralBundle\\Controller\\DefaultController::AideAction',  '_route' => 'Indago_general_aide',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
