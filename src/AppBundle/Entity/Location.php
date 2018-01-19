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
     */
    private $idPays;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_departement", type="integer", nullable=true)
     */
    private $idDepartement = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_commune", type="integer", nullable=false)
     */
    private $idCommune;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_lieu_dits", type="integer", nullable=true)
     */
    private $idLieuDits = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_coords", type="integer", nullable=true)
     */
    private $idCoords = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return int
     */
    public function getIdPays() {
        return $this->idPays;
    }

    /**
     * @param int $idPays
     */
    public function setIdPays($idPays) {
        $this->idPays = $idPays;
    }

    /**
     * @return int
     */
    public function getIdDepartement() {
        return $this->idDepartement;
    }

    /**
     * @param int $idDepartement
     */
    public function setIdDepartement($idDepartement) {
        $this->idDepartement = $idDepartement;
    }

    /**
     * @return int
     */
    public function getIdCommune() {
        return $this->idCommune;
    }

    /**
     * @param int $idCommune
     */
    public function setIdCommune($idCommune) {
        $this->idCommune = $idCommune;
    }

    /**
     * @return int
     */
    public function getIdLieuDits() {
        return $this->idLieuDits;
    }

    /**
     * @param int $idLieuDits
     */
    public function setIdLieuDits($idLieuDits) {
        $this->idLieuDits = $idLieuDits;
    }

    /**
     * @return int
     */
    public function getIdCoords() {
        return $this->idCoords;
    }

    /**
     * @param int $idCoords
     */
    public function setIdCoords($idCoords) {
        $this->idCoords = $idCoords;
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

