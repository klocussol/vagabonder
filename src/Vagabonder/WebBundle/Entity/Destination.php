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
     * @ORM\Column(name="city_population", type="integer")
     */
    protected $cityPopulation;

    /**
     * @var float
     *
     * @ORM\Column(name="city_longitude", type="float")
     */
    protected $cityLongitude;

    /**
     * @var float
     *
     * @ORM\Column(name="city_latitude", type="float")
     */
    protected $cityLatitude;


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
    public function setCityPopulation($cityPopulation)
    {
        $this->cityPopulation = $cityPopulation;

        return $this;
    }

    /**
     * Get city population
     *
     * @return int
     */
    public function getCityPopulation()
    {
        return $this->cityPopulation;
    }

    /**
     * Set city longitude
     * @param float $cityLongitude
     *
     * @return Destination
     */
    public function setCityLongitude($cityLongitude)
    {
        $this->cityLongitude = $cityLongitude;

        return $this;
    }

    /**
     * Get city longitude
     *
     * @return int
     */
    public function getCityLongitude()
    {
        return $this->cityLongitude;
    }

    /**
     * Set city latitude
     * @param float $cityLatitude
     *
     * @return Destination
     */
    public function setCityLatitude($cityLatitude)
    {
        $this->cityLatitude = $cityLatitude;

        return $this;
    }

    /**
     * Get city latitude
     *
     * @return int
     */
    public function getCityLatitude()
    {
        return $this->cityLatitude;
    }
}
