<?php

namespace Vagabonder\WebBundle\Entity;

use Vagabonder\WebBundle\Entity\Destination;

class DestinationTest extends \PHPUnit_Framework_TestCase
{
    const VALID_CITY = "Beirut";
    const VALID_COUNTRY = "Lebanon";

    /**
     * @test
     */
    public function validInstantiation()
    {
        $this->assertInstanceOf('Vagabonder\WebBundle\Entity\Destination', new Destination);
    }

    /**
     * @test
     */
    public function validAccessors()
    {
        $this->assertNull($this->createValidDestination()->getId());
        $this->assertEquals($this->createValidDestination()->setCity(self::VALID_CITY)->getCity(), self::VALID_CITY);
        $this->assertEquals($this->createValidDestination()->setCountry(self::VALID_COUNTRY)->getCountry(), self::VALID_COUNTRY);
    }

    private function createValidDestination()
    {
        return $destination = new Destination;
    }
}