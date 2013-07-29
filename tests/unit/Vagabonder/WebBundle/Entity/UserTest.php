<?php

namespace Vagabonder\WebBundle\Entity;

use Vagabonder\WebBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Mockery;

class UserTest extends \PHPUnit_Framework_TestCase
{
    public function setup()
    {
        $this->validTrip = \Mockery::mock('Vagabonder\WebBundle\Entity\Trip');
    }

    /**
     * @test
     */
    public function validInstantiation()
    {
        $this->assertInstanceOf('Vagabonder\WebBundle\Entity\User', $this->createValidUser());
    }

    /**
     * @test
     */
    public function validAccessors()
    {
        $this->assertNull($this->createValidUser()->getId());
    }

    /**
     * @test
     */
    public function validTripAccessors() {
        $trips = $this->createValidUser()->getTrips();
        $this->assertInstanceOf('Doctrine\Common\Collections\ArrayCollection', $trips);
    }

    /**
     * @test
     */
    public function validAddTrip() {
        $trip = $this->validTrip;
        $user = $this->createValidUser()->addTrip($trip);
        $this->assertTrue($user->getTrips()->contains($trip));
    }

    private function createValidUser()
    {
        return $user = new User();
    }

     public function tearDown() {
        \Mockery::close();
    }
}