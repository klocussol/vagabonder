<?php

namespace Vagabonder\WebBundle\Entity;

use Vagabonder\WebBundle\Entity\Trip;

class TripTest extends \PHPUnit_Framework_TestCase
{
    const VALID_NAME = "Nicaragua 2013";
    const VALID_DESCRIPTION = "Visiting Nicaragua with roommates";
    const VALID_START_DATE_STRING = "2013-09-14";
    const VALID_END_DATE_STRING = "2013-10-01";

    private $validStartDate;

    public function setup() {
        $this->vaildStartDate = new \DateTime(self::VALID_START_DATE_STRING);
        $this->validEndDate = new \DateTime(self::VALID_END_DATE_STRING);
    }

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
        $this->assertEquals($this->validStartDate, $this->createValidTrip()->setStartDate($this->validStartDate)->getStartDate());
        $this->assertEquals($this->validEndDate, $this->createValidTrip()->setEndDate($this->validEndDate)->getEndDate());
        $this->assertEquals(self::VALID_DESCRIPTION, $this->createValidTrip()->setDescription(self::VALID_DESCRIPTION)->getDescription());
    }

    private function createValidTrip()
    {
        return $trip = new Trip();
    }
}