<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="location", indexes={@ORM\Index(name="ind_pays_commune", columns={"id_commune", "id_pays"})})
 * @ORM\Entity
 */
class Location {
    /**
     * @var Pays
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pays")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pays", referencedColumnName="id", nullable=true)
     * })
     */
    private $Pays;

    /**
     * @var Departement
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_departement", referencedColumnName="id_departement", nullable=true)
     * })
     */
    private $Departement;

    /**
     * @var Commune
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Commune")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_commune", referencedColumnName="id_commune", nullable=true)
     * })
     */
    private $Commune;

    /**
     * @var LieuDits
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\LieuDits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lieu_dits", referencedColumnName="id_lieu_dits", nullable=true)
     * })
     */
    private $LieuDits;

    /**
     * @var Coordonnees
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Coordonnees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_coordonnee", referencedColumnName="id", nullable=true)
     * })
     */
    private $Coords;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return Pays
     */
    public function getPays() {
        return $this->Pays;
    }

    /**
     * @param Pays $Pays
     */
    public function setPays(Pays $Pays) {
        $this->Pays = $Pays;
    }

    /**
     * @return Departement
     */
    public function getDepartement() {
        return $this->Departement;
    }

    /**
     * @param Departement $Departement
     */
    public function setDepartement($Departement) {
        $this->Departement = $Departement;
    }

    /**
     * @return Commune
     */
    public function getCommune() {
        return $this->Commune;
    }

    /**
     * @param Commune $Commune
     */
    public function setCommune($Commune) {
        $this->Commune = $Commune;
    }

    /**
     * @return LieuDits
     */
    public function getLieuDits() {
        return $this->LieuDits;
    }

    /**
     * @param LieuDits $LieuDits
     */
    public function setLieuDits($LieuDits) {
        $this->LieuDits = $LieuDits;
    }

    /**
     * @return Coordonnees
     */
    public function getCoords() {
        return $this->Coords;
    }

    /**
     * @param Coordonnees $Coords
     */
    public function setCoords($Coords) {
        $this->Coords = $Coords;
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
    public function setId($id) {
        $this->id = $id;
    }

}

