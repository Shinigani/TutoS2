<?php

namespace TutoS2\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TutoS2UserBundle:Default:index.html.twig');
    }
}
