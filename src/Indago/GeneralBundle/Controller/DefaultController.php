<?php

namespace Indago\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Intl\ResourceBundle\Util\ArrayAccessibleResourceBundle;

class DefaultController extends Controller
{
	public function getEntityManager(){
		$em = $this->get('doctrine')->getManager();
		return $em;
	}
	
	public function renderMenuAction(){
		$em = $this->getEntityManager();
		$menus = $em->getRepository('IndagoGeneralBundle:Menu')
		->getMenu();
		return $this->render('IndagoGeneralBundle::sidebar.html.twig',
				array('menus' => $menus));
	}
	
    public function indexAction()
    {
    	$em = $this->getEntityManager();
    	//$breadcrumb = array();
    	
    	//$user = $this->get('security.context')->getToken()->getUser();
    }
    
    public function profilAction(){
    	$em = $this->getEntityManager();
    	//$user = $this->get('security.context')->getToken()->getUser();
    
    }
    
    public function CommentCaMarcheAction(){
    	$em = $this->getEntityManager();
    	
    }
    
    public function AideAction(){
    	$em = $this->getEntityManager();
    	
    }
    
}
