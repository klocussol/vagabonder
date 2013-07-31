<?php

namespace Vagabonder\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destination
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Destination
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     */
    protected $city;

    /**
     * @var string
     *
     * @ORM\Column(name="city_accent", type="string", length=255)
     */
    protected $cityAccent;

    /**
     * @var string
     *
     * @ORM\Column(name="country_code", type="string", length=2)
     */
    protected $countryCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="region", type="integer")
     */
    protected $region;

    /**
     * @var integer
     *
     * @ORM\Column(name="population", type="integer")
     */
    protected $population;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    protected $longitude;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    protected $latitude;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Destination
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set city accent
     *
     * @param string $cityAccent
     * @return Destination
     */
    public function setCityAccent($cityAccent)
    {
        $this->cityAccent = $cityAccent;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCityAccent()
    {
        return $this->cityAccent;
    }

    /**
     * Set country code
     *
     * @param string $countryCode
     * @return Destination
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get country code
     *
     * @return string 
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set region
     *
     * @param int $region
     * @return Destination
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get country code
     *
     * @return int
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set city population
     * @param int $cityPopulation
     *
     * @return Destination
     */
    public function setPopulation($population)
    {
        $this->population = $population;

        return $this;
    }

    /**
     * Get city population
     *
     * @return int
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Set city longitude
     * @param float $cityLongitude
     *
     * @return Destination
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get city longitude
     *
     * @return int
     */
    public function getlongitude()
    {
        return $this->longitude;
    }

    /**
     * Set city latitude
     * @param float $latitude
     *
     * @return Destination
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get city latitude
     *
     * @return int
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
}
