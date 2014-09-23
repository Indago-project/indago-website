<?php

namespace Indago\SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	public function getEntityManager(){
		$em = $this->get('doctrine')->getManager();
		return $em;
	}
	
	//recherche par mot cle (que ce soit une offre d'emploi ou un evenement
    public function indexAction()
    {
    	$em = $this->getEntityManager();
 
    	return $this->render('IndagoSearchBundle:Default:index.html.twig');
    }
    
    public function eventSearchAction()
    {
    	$em = $this->getEntityManager();
    	
    	return $this->render('IndagoSearchBundle:Default:index.html.twig');
    }
    
}
