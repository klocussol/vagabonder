<?php

namespace Vagabonder\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TripController extends Controller
{
    public function newAction()
    {
        return $this->render('VagabonderWebBundle:Trip:new.html.twig');
    }

}
