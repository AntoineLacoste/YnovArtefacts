<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="location", indexes={@ORM\Index(name="ind_pays_commune", columns={"id_commune", "id_pays"})})
 * @ORM\Entity
 */
class Location
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pays", type="integer", nullable=false)
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pays")
     */
    private $Pays;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_departement", type="integer", nullable=true)
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Departement")
     */
    private $Departement = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_commune", type="integer", nullable=false)
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Commune")
     */
    private $Commune;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_lieu_dits", type="integer", nullable=true)
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\LieuDits")
     */
    private $LieuDits = '0';

    /**
     * @return int
     */
    public function getPays(): int
    {
        return $this->Pays;
    }

    /**
     * @param int $Pays
     */
    public function setPays(int $Pays): void
    {
        $this->Pays = $Pays;
    }

    /**
     * @return int
     */
    public function getDepartement(): int
    {
        return $this->Departement;
    }

    /**
     * @param int $Departement
     */
    public function setDepartement(int $Departement): void
    {
        $this->Departement = $Departement;
    }

    /**
     * @return int
     */
    public function getCommune(): int
    {
        return $this->Commune;
    }

    /**
     * @param int $Commune
     */
    public function setCommune(int $Commune): void
    {
        $this->Commune = $Commune;
    }

    /**
     * @return int
     */
    public function getLieuDits(): int
    {
        return $this->LieuDits;
    }

    /**
     * @param int $LieuDits
     */
    public function setLieuDits(int $LieuDits): void
    {
        $this->LieuDits = $LieuDits;
    }

    /**
     * @return int
     */
    public function getCoords(): int
    {
        return $this->Coords;
    }

    /**
     * @param int $Coords
     */
    public function setCoords(int $Coords): void
    {
        $this->Coords = $Coords;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id_coords", type="integer", nullable=true)
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Coordonnees")
     */
    private $Coords = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



}

