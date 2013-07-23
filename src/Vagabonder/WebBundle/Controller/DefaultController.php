<?php

namespace Vagabonder\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        if($this->get('security.context')->isGranted('ROLE_USER')) { 
            return $this->forward('VagabonderWebBundle:Default:myProfile');
        }
        return $this->render('VagabonderWebBundle:Default:index.html.twig');
    }

    public function myProfileAction()
    {
        return $this->render('VagabonderWebBundle:Default:my-profile.html.twig');
    }
}
