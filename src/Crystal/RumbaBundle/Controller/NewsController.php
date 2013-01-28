<?php

namespace Crystal\RumbaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crystal\BaseBundle\Entity\catNews;
use Crystal\BaseBundle\Entity\catEvents;

class NewsController extends Controller
{
    public function addAction($idEvent)
    {
    	$New = new catNews();
    	$em = $this->getDoctrine()->getEntityManager();

    	$request = $this->getRequest();

    	if($request->getMethod() == 'POST')
		{
			$_POST = $request->request;

			$Event = $em->getRepository('CrystalBaseBundle:catEvents')->find($idEvent);

	    	$New->settitle($_POST->get('txtTitle'));
	    	$New->setdate($_POST->get('txtDate'));
	    	$New->setcontent($_POST->get('txtContent'));
	    	$New->setidEvent($Event);

	    	$em->persist($New);
	    	$em->flush();

	    	return $this->redirect($this->generateURL('listaNoticias'));
    	}
    	else
    	{
    		$Event = $em->getRepository('CrystalBaseBundle:catEvents')->findAll();
    		return $this->render('CrystalRumbaBundle:News:addNew.html.twig', array('Events' => $Event));
    	}
        
    }

    public function listAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$News = $em->getRepository('CrystalBaseBundle:catNews')->findAll();
    	$Events = $em->getRepository('CrystalBaseBundle:catEvents')->findAll();
    	return $this->render('CrystalRumbaBundle:News:listNews.html.twig', array('News' => $News, 'Events' => $Events));
    }

    

}

?>