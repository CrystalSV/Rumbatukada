<?php

namespace Crystal\RumbaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crystal\BaseBundle\Entity\catInstruments;
use Crystal\BaseBundle\Entity\catUser;

class InstrumentsController extends controller
{
	public function addAction()
	{
		$request = $this->getRequest();
		$instrument = new catInstruments();
		$em = $this->getDoctrine()->getEntityManager();

		if ($request->getMethod() == 'POST') {
			$_POST = $request->request;

			$instrument->setName($_POST->get('txtName'));
			$instrument->setType($_POST->get('txtType'));

			$em->persist($instrument);
			$em->flush();

			return $this->redirect($this->generateURL('listaInstrumentos'));

		}
		else
		{
			return $this->render('CrystalRumbaBundle:Instruments:addInstrument.html.twig',array('instrument' => $instrument));
		}

	}

	public function updateAction($id)
	{
		$request = $this->getRequest();
		$em = $this->getDoctrine()->getEntityManager();
		$instrument = $em->getRepository('CrystalBaseBundle:catInstruments')->find($id);

		if ($request->getMethod() == 'POST') {

			$_POST = $request->request;

			$instrument->setName($_POST->get('txtName'));
			$instrument->setType($_POST->get('txtType'));

			$em->persist($instrument);
			$em->flush();

			return $this->redirect($this->generateURL('listaInstrumentos'));
		}
		else
		{
			return $this->render('CrystalRumbaBundle:Instruments:updateInstrument.html.twig', array('instrument' => $instrument));
		}

	}
	
	public function listAction()
	{
		$request = $this->getRequest();
		$em = $this->getDoctrine()->getEntityManager();
		$instrument = $em->getRepository('CrystalBaseBundle:catInstruments')->findAll();

		return $this->render('CrystalRumbaBundle:Instruments:listInstrument.html.twig', array('instrument' => $instrument));

	}

	public function deleteAction($id)
	{
		$em = $this->getDoctrine()->getEntityManager();
		$instrument = $em->getRepository('CrystalBaseBundle:catInstruments')->find($id);
		$user = $em->getRepository('CrystalBaseBundle:catUser')->findById($id);

		if (count($user) >= 1) {
			$instrument = $em->getRepository('CrystalBaseBundle:catInstruments')->findAll();
			$error = 'No puede borrarse este instrumento porque hay personas que lo ejecutan';
			return $this->render('CrystalRumbaBundle:Instruments:listInstrument.html.twig', array('instrument' => $instrument, 'error' => $error));

		}
		else
		{
			$em->remove($instrument);
			$em->flush();
			return $this->redirect($this->generateURL('listaInstrumentos'));

		}


	}
}

?>