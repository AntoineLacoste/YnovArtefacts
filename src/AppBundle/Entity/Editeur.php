<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Editeur
 *
 * @ORM\Table(name="editeur", indexes={@ORM\Index(name="FK_editeur_location", columns={"location"})})
 * @ORM\Entity
 */
class Editeur
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=120, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_editeur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEditeur;

    /**
     * @var \AppBundle\Entity\Location
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location", referencedColumnName="id")
     * })
     */
    private $location;

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
     * @return int
     */
    public function getIdEditeur() {
        return $this->idEditeur;
    }

    /**
     * @param int $idEditeur
     */
    public function setIdEditeur($idEditeur) {
        $this->idEditeur = $idEditeur;
    }

    /**
     * @return Location
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * @param Location $location
     */
    public function setLocation($location) {
        $this->location = $location;
    }
}

