<?php

namespace Vagabonder\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VagabonderWebBundle:Default:index.html.twig');
    }

    public function profileAction()
    {
        return $this->render('VagabonderWebBundle:Default:profile.html.twig');
    }
}
