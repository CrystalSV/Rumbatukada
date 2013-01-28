<?php
	namespace Crystal\RumbaBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Crystal\BaseBundle\Entity\ctrAccess;

	class AccessController extends Controller
	{

	    public function listAction()
	    {
	    	$access = new ctrAccess();
	    	$em = $this->getDoctrine()->getEntityManager();
			$access = $em->getRepository('CrystalBaseBundle:ctrAccess')->findAll();
			return $this->render('CrystalRumbaBundle:Access:listAccess.html.twig', array('access' => $access));
	    }

	    public function addAction()
		{
			$access = new ctrAccess();
			$em = $this->getDoctrine()->getEntityManager();

			$request = $this->getRequest();

			if($request->getMethod() == 'POST')
			{
				$_POST = $request->request;

				$access->setUser($_POST->get('txtUser'));
				$access->setPass($_POST->get('txtPass'));

				$em->persist($access);
				$em->flush();
				
				return $this->redirect($this->generateURL('listaAcceso'));
			}
			else
			{
				return $this->render('CrystalRumbaBundle:Access:addAccess.html.twig', array('access' => $access));
			}
		}

		public function updateAction($id)
		{

			$request = $this->getRequest();
			$em = $this->getDoctrine()->getEntityManager();
			$access = $em->getRepository('CrystalBaseBundle:ctrAccess')->find($id);

			if($request->getMethod()=='POST')
			{
				$_POST = $request->request;

				$access->setUser($_POST->get('txtUser'));
				$access->setPass($_POST->get('txtPass'));

				$em->persist($access);
				$em->flush();

				return $this->redirect($this->generateURL('listaAcceso'));

			}
			else
			{
				return $this->render('CrystalRumbaBundle:Access:updateAccess.html.twig', array('access' => $access)); //D:
			}

		}

		public function deleteAction($id)
		{
			$em = $this->getDoctrine()->getEntitymanager();
			$access = $em->getRepository('CrystalBaseBundle:ctrAccess')->find($id);
		
	
			$em->remove($access);
			$em->flush();
			return $this->redirect($this->generateURL('listaAcceso'));
		}


		

	}

?>