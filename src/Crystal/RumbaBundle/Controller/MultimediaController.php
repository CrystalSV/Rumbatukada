<?php
	namespace Crystal\RumbaBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Crystal\BaseBundle\Entity\ctrMultimedia;
	use Crystal\BaseBundle\Entity\catNews;

	class MultimediaController extends Controller
	{
		public function listAction()
		{
			$Multimedia = new ctrMultimedia();
	    	$em = $this->getDoctrine()->getEntityManager();
			$Multimedia = $em->getRepository('CrystalBaseBundle:ctrMultimedia')->findAll();
			return $this->render('CrystalRumbaBundle:Multimedia:listMultimedia.html.twig', array('Multimedia' => $Multimedia));
		}

		public function addAction($id)
		{			
			$New = new catNews();
			$em = $this->getDoctrine()->getEntityManager();
			$request = $this->getRequest();
			

			$New = $em->getRepository('CrystalBaseBundle:catNews')->find($id);
			if($request->getMethod() == 'POST')
			{
				$_POST = $request->request;
				for($i = 0; $i < $_POST->get('numVideos'); $i++)
				{
					$Multimedia = new ctrMultimedia();
					$Multimedia->setidNew($New);
					$Multimedia->setType('video');
					$Multimedia->setContent($_POST->get('txtVideo' . $i));

					$em->persist($Multimedia);
					$em->flush();
				}
				return $this->redirect($this->generateURL('listaMultimedia', array('id' => $id)));
			}
			else
			{
				return $this->render('CrystalRumbaBundle:Multimedia:addMultimedia.html.twig', array('' => ''));
			}
		}
	}

?>