<?php

namespace Crystal\RumbaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crystal\BaseBundle\Entity\catEvents; // asi tenes que incluir todas las entidades que ocupes
use Crystal\BaseBundle\Entity\catNews;

class EventsController extends Controller
{
    public function createAction()
    {
    	$request = $this->getRequest();
    	$event = new catEvents();
    	$em = $this->getDoctrine()->getEntityManager();

    	if($request->getMethod()== 'POST')
    	{
    		$_POST = $request->request;

    		$event->setTitle($_POST->get('txtTitle'));
    		$event->setDate($_POST->get('txtDate'));
    		$event->setPlace($_POST->get('txtPlace'));
    		$event->setTime($_POST->get('txtTime'));
    		$event->setDescription($_POST->get('txtDescription'));

    		$em->persist($event);
    		$em->flush();

    		return $this->redirect($this->generateURL('calendarizacion')); 
    	}
    	else
    	{
    		return $this->render('CrystalRumbaBundle:Events:createEvent.html.twig');
    	}

        return $this->render('CrystalRumbaBundle:Default:index.html.twig', array('event' => $event)); //D:
    }

	public function updateAction($id)
	{
		$request = $this->getRequest();
		$em = $this->getDoctrine()->getEntityManager();
		$event = $em->getRepository('CrystalBaseBundle:catEvents')->find($id);

		if($request->getMethod()=='POST')
		{
			$_POST = $request->request;

			$event->setTitle($_POST->get('txtTitle'));
			$event->setDate($_POST->get('txtDate'));
			$event->setPlace($_POST->get('txtPlace'));
			$event->setTime($_POST->get('txtTime'));
			$event->setDescription($_POST->get('txtDescription'));

			$em->persist($event);
			$em->flush();

			return $this->redirect($this->generateURL('calendarizacion'));
		}
		else
		{
			return $this->render('CrystalRumbaBundle:Events:updateEvent.html.twig', array('event' => $event)); //D:
		}

	}

	public function listAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
		$event = $em->getRepository('CrystalBaseBundle:catEvents')->findAll();
		return $this->render('CrystalRumbaBundle:Events:listEvent.html.twig', array('event' => $event));
	}

	public function deleteAction($id)
	{
		$em = $this->getDoctrine()->getEntitymanager();
		$event = $em->getRepository('CrystalBaseBundle:catEvents')->find($id);
		$new = $em->getRepository('CrystalBaseBundle:catNews')->findByidEvent($id);
		if (count($new) >= 1) 
		{
			$events = $em->getRepository('CrystalBaseBundle:catEvents')->findAll();
			$error = 'No se puede eliminar este evento porque hay noticias asociadas a este';
			return $this->render('CrystalRumbaBundle:Events:listEvent.html.twig', array('event' => $events, 'Error' => $error));
		}

		else
		{
			$em->remove($event);
			$em->flush();
			return $this->redirect($this->generateURL('calendarizacion'));
		}


	}
}

?>