<?php

namespace Vagabonder\WebBundle\Entity;

use Vagabonder\WebBundle\Entity\Destination;

class DestinationTest extends \PHPUnit_Framework_TestCase
{
    const VALID_CITY = "Andorra la Vella";
    const VALID_COUNTRY_CODE = "ad";
    const VALID_REGION = 07;
    const VALID_CITY_ACCENT = 'Cértes';
    const VALID_CITY_POPULATION = 4500;
    const VALID_CITY_LATITUDE = 42.55;
    const VALID_CITY_LONGITUDE = 1.5833333;

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
        $destination = $this->createValidDestination();

        $this->assertNull($destination->getId());
        $this->assertEquals($destination->setCity(self::VALID_CITY)->getCity(), self::VALID_CITY);
        $this->assertEquals($destination->setCountryCode(self::VALID_COUNTRY_CODE)->getCountryCode(), self::VALID_COUNTRY_CODE);
        $this->assertEquals($destination->setRegion(self::VALID_REGION)->getRegion(), self::VALID_REGION);
        $this->assertEquals($destination->setCityPopulation(self::VALID_CITY_POPULATION)->getCityPopulation(), self::VALID_CITY_POPULATION);
        $this->assertEquals($destination->setCityLatitude(self::VALID_CITY_LATITUDE)->getCityLatitude(), self::VALID_CITY_LATITUDE);
        $this->assertEquals($destination->setCityLongitude(self::VALID_CITY_LONGITUDE)->getCityLongitude(), self::VALID_CITY_LONGITUDE);
        $this->assertEquals($destination->setCityAccent(self::VALID_CITY_ACCENT)->getCityAccent(), self::VALID_CITY_ACCENT);
    }

    private function createValidDestination()
    {
        return $destination = new Destination;
    }
}