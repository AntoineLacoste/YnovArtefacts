<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nationalite
 *
 * @ORM\Table(name="nationalite")
 * @ORM\Entity
 */
class Nationalite
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="abv", type="string", length=3, nullable=false)
     */
    private $abv;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_nationalite", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNationalite;

    /**
     * @return string
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom) {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getAbv() {
        return $this->abv;
    }

    /**
     * @param string $abv
     */
    public function setAbv($abv) {
        $this->abv = $abv;
    }

    /**
     * @return int
     */
    public function getIdNationalite() {
        return $this->idNationalite;
    }

    /**
     * @param int $idNationalite
     */
    public function setIdNationalite($idNationalite) {
        $this->idNationalite = $idNationalite;
    }


}

