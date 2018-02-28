<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coordonnees
 *
 * @ORM\Table(name="coordonnees")
 * @ORM\Entity
 */
class Coordonnees
{
    /**
     * @var string
     *
     * @ORM\Column(name="lon", type="string", length=30, nullable=false)
     */
    private $lon;

    /**
     * @var string
     *
     * @ORM\Column(name="lat", type="string", length=30, nullable=false)
     */
    private $lat;

    /**
     * @var string
     *
     * @ORM\Column(name="type_coord", type="string", length=30, nullable=false)
     */
    private $typeCoord;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return string
     */
    public function getLon() {
        return $this->lon;
    }

    /**
     * @param string $lon
     */
    public function setLon($lon) {
        $this->lon = $lon;
    }

    /**
     * @return string
     */
    public function getLat() {
        return $this->lat;
    }

    /**
     * @param string $lat
     */
    public function setLat($lat) {
        $this->lat = $lat;
    }

    /**
     * @return string
     */
    public function getTypeCoord() {
        return $this->typeCoord;
    }

    /**
     * @param string $typeCoord
     */
    public function setTypeCoord($typeCoord) {
        $this->typeCoord = $typeCoord;
    }

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id) {
        $this->id = $id;
    }


}

