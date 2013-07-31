<?php

namespace Vagabonder\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Vagabonder\WebBundle\Entity\Destination;

class DestinationController extends Controller
{
    public function searchAction()
    {
        $term = $this->getRequest()->get('term');

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT d FROM VagabonderWebBundle:Destination d WHERE d.city LIKE \'' . $term. '%\'');

        $destinations = $query->getResult();

        $results = [];

        foreach ($destinations as $destination) {
            $results[] = $this->getDisplayDestination($destination);
        }
        $response = new Response(json_encode($results));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    public function getDisplayDestination($destination)
    {
        $result = new \stdClass;
        $result->label = $destination->getCity() . ', ' . $destination->getCountryCode();
        $result->id = $destination->getId();

        return $result;
    }
}