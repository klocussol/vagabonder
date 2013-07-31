<?php

namespace Vagabonder\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Vagabonder\WebBundle\Entity\Trip;
use Vagabonder\WebBundle\Entity\Destination;

class TripController extends Controller
{
    public function newAction()
    {
        if($this->getRequest()->getMethod() == 'POST') {
            $request = $this->getRequest();
            $user = $this->get('security.context')->getToken()->getUser();
            $trip = new Trip();

            $tripDestinationId = $request->get('trip-destination-id');

            $destination = $this->getDoctrine()
                ->getRepository('VagabonderWebBundle:Destination')
                ->findOneById($tripDestinationId);

            $trip->setName($request->get('trip-name'))
                 ->setDestination($destination)
                 ->setStartDate(new \DateTime($request->get('trip-start-date')))
                 ->setEndDate(new \DateTime($request->get('trip-end-date')))
                 ->setDescription($request->get('trip-description'))
                 ->setCreatedByUser($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($trip);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                'Your trip has been saved, see who you could meet up with below!'
            );
            return $this->redirect($this->generateUrl('vagabonder_web_trip_view', array('id' => $trip->getId())));
        }
        return $this->render('VagabonderWebBundle:Trip:new.html.twig');
    }

    public function viewAction($id)
    {
        // how to match: repository query, getDestination and find other trips with those destinations and related users
        // Create a trip repository class with references
        


        $trip = $this->getDoctrine()->getRepository('VagabonderWebBundle:Trip')->find($id);

        return $this->render('VagabonderWebBundle:Trip:view.html.twig', array(
            'name' => $trip->getName(),
            'destination' => $trip->getDestination()->getCity(),
            'description' => $trip->getDescription(),
            'startDate' => $trip->getStartDate()->format('m-d-Y'),
            'endDate' => $trip->getEndDate()->format('m-d-Y'),
            'year' => $trip->getStartDate()->format('Y')
        ));
    }
}
