<?php

namespace Vagabonder\WebBundle\Entity;

use Vagabonder\WebBundle\Entity\Trip;

class TripTest extends \PHPUnit_Framework_TestCase
{
    const VALID_NAME = "Nicaragua 2013";
    const VALID_DESCRIPTION = "Visiting Nicaragua with roommates";
    const VALID_START_DATE_STRING = "2013-09-14";

    /**
     * @test
     */
    public function validInstantiation() {
        $this->assertInstanceOf('Vagabonder\WebBundle\Entity\Trip', new Trip);
    }

    /**
     * @test
     */
    public function validAccessors()
    {
        $this->assertEquals(self::VALID_NAME, $this->createValidTrip()->setName(self::VALID_NAME)->getName());
        $this->assertNull($this->createValidTrip()->getId());
        $this->assertEquals(new \DateTime(self::VALID_START_DATE_STRING), $this->createValidTrip()->setStartDate(new \DateTime(self::VALID_START_DATE_STRING))->getStartDate());
    }

    private function createValidTrip()
    {
        return $trip = new Trip();
    }
}