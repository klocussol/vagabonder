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

            $tripDestination = $request->get('trip-destination');
            $destination = explode(', ', $tripDestination);
            $city = $destination[0];
            $countryCode = $destination[1];

            $em = $this->getDoctrine()->getManager();
            $query = $em->createQuery(
            "SELECT d FROM VagabonderWebBundle:Destination d WHERE d.city LIKE '$city%'");

            $destinationId = $query->getResult()->getId();

            var_dump($destinationId);

            // $trip->setName($request->get('trip-name'))
            //      ->setStartDate(new \DateTime($request->get('trip-start-date')))
            //      ->setEndDate(new \DateTime($request->get('trip-end-date')))
            //      ->setDescription($request->get('trip-description'))
            //      ->setCreatedByUser($user);

            // $em = $this->getDoctrine()->getManager();
            // $em->persist($trip);
            // $em->flush();

            // $this->get('session')->getFlashBag()->add(
            //     'success',
            //     'Your trip has been saved, see who you could meet up with below!'
            // );
            // return $this->redirect($this->generateUrl('vagabonder_web_trip_view', array('id' => $trip->getId())));
        }
        return $this->render('VagabonderWebBundle:Trip:new.html.twig');
    }

    public function viewAction($id)
    {
        $trip = $this->getDoctrine()->getRepository('VagabonderWebBundle:Trip')->find($id);

        return $this->render('VagabonderWebBundle:Trip:view.html.twig', array(
            'name' => $trip->getName(),
            'description' => $trip->getDescription(),
            'startDate' => $trip->getStartDate()->format('m-d-Y'),
            'endDate' => $trip->getEndDate()->format('m-d-Y')
        ));
    }
}
