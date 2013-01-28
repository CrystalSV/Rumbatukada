<?php
namespace Crystal\RumbaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Crystal\BaseBundle\Entity\catUser; 
use Crystal\BaseBundle\Entity\catInstruments;
use Crystal\BaseBundle\Entity\ctrUserInstruments;

class UsersController extends Controller 
{
	public function addAction()
	{
		
		$user = new catUser();

		$em = $this->getDoctrine()->getEntityManager();
		$request = $this->getRequest();

		if ($request->getMethod() == 'POST') 
		{

			$_POST = $request->request;

			$user->setUser($_POST->get('txtUser'));
			$user->setPass($_POST->get('txtPass'));
			$user->setName($_POST->get('txtName'));
			$user->setAge($_POST->get('txtAge'));
			$user->setEmail($_POST->get('txtEmail'));
			$user->setFacebook($_POST->get('txtFacebook'));
			$user->setTwitter($_POST->get('txtTwitter'));
			$user->setPicture($_POST->get('txtPicture'));
			
			$em->persist($user);
			$em->flush();
				
			return $this->redirect($this->generateURL('listaUsuario'));


		}
		else
		{
			return $this->render('CrystalRumbaBundle:Users:addUser.html.twig', array('user' => $user));
		}
	}

	public function listAction()
	{
	   	$user = new catUser();
	   	$em = $this->getDoctrine()->getEntityManager();
		$user = $em->getRepository('CrystalBaseBundle:catUser')->findAll();
		return $this->render('CrystalRumbaBundle:Users:listUser.html.twig', array('user' => $user));
	}

	public function updateAction($id)
		{

			$request = $this->getRequest();
			$em = $this->getDoctrine()->getEntityManager();
			$user = $em->getRepository('CrystalBaseBundle:catUser')->find($id);

			if($request->getMethod()=='POST')
			{
				$_POST = $request->request;

				$user->setUser($_POST->get('txtUser'));
				$user->setPass($_POST->get('txtPass'));
				$user->setName($_POST->get('txtName'));
				$user->setAge($_POST->get('txtAge'));
				$user->setEmail($_POST->get('txtEmail'));
				$user->setFacebook($_POST->get('txtFacebook'));
				$user->setTwitter($_POST->get('txtTwitter'));
				$user->setPicture($_POST->get('txtPicture'));

				$em->persist($user);
				$em->flush();

				return $this->redirect($this->generateURL('listaUsuario'));

			}
			else
			{
				return $this->render('CrystalRumbaBundle:Users:updateUser.html.twig', array('user' => $user)); //D:
			}

		}

		public function deleteAction($id)
		{
			$em = $this->getDoctrine()->getEntitymanager();
			$user = $em->getRepository('CrystalBaseBundle:catUser')->find($id);
		
	
			$em->remove($user);
			$em->flush();
			return $this->redirect($this->generateURL('listaUsuario'));
		}
}
?>