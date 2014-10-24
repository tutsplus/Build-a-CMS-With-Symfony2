<?php

namespace Custom\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$pages = $em->getRepository('CustomCMSBundle:Page')->findAll();
        return $this->render('CustomCMSBundle:Default:index.html.twig', array(
        	'pages'=>$pages
    	));
    }

    public function displayAction($id) {
    	$em = $this->getDoctrine()->getManager();
    	$page = $em->getRepository('CustomCMSBundle:Page')->find($id);
    	return $this->render('CustomCMSBundle:Default:display.html.twig', array(
    		'page'=>$page
		));
    }
}
