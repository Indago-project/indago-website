<?php

namespace Indago\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
	public function getEntityManager(){
		$em = $this->get('doctrine')->getManager();
		return $em;
	}
	
    public function loginAction()
    {
    	$em = $this->getEntityManager();
    	$request = $this->getRequest();
    	$session = $request->getSession();
    	
    	if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
    		$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
    	} else {
    		$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
    		$session->remove(SecurityContext::AUTHENTICATION_ERROR);
    	}
    	return $this->render('IndagoCompteBundle:Default:index.html.twig', array(
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    	
    }
    
    public function logoutAction(){
    	
    }
    
    
    public function renderMenuSiteAction(){
    	$em = $this->getEntityManager();
    	$menus = $em->getRepository('IndagoGeneralBundle:Menu')
    	->getMenu();
    	return $this->render('IndagoCompteBundle::menu-site.html.twig',
    			array('menus' => $menus));
    }
    
    public function renderMenuUserAction(){
    	$em = $this->getEntityManager();
    	$menus = $em->getRepository('IndagoGeneralBundle:Menu')
    	->getMenu();
    	return $this->render('IndagoCompteBundle::menuUser.html.twig',
    			array('menus' => $menus));
    }
    
    public function renderMenuAction(){
    	$em = $this->getEntityManager();
    	$menus = $em->getRepository('IndagoGeneralBundle:Menu')
    	->getMenu();
    	return $this->render('IndagoCompteBundle::menu.html.twig',
    			array('menus' => $menus));
    }
    
}
