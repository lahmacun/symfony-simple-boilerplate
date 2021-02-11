<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
	/**
	 * @Route("/", name="landing", methods={"GET"})
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function landing() {
		return $this->render('landing/home.html.twig');
	}
}