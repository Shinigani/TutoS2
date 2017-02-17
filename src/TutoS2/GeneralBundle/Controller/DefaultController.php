<?php

namespace TutoS2\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('TutoS2GeneralBundle:Default:index.html.twig');
    }
}
