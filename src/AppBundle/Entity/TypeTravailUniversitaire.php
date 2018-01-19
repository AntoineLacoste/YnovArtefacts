<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeTravailUniversitaire
 *
 * @ORM\Table(name="type_travail_universitaire")
 * @ORM\Entity
 */
class TypeTravailUniversitaire
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=50, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_travail_universitaire", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeTravailUniversitaire;

    /**
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getIdTypeTravailUniversitaire() {
        return $this->idTypeTravailUniversitaire;
    }

    /**
     * @param int $idTypeTravailUniversitaire
     */
    public function setIdTypeTravailUniversitaire($idTypeTravailUniversitaire) {
        $this->idTypeTravailUniversitaire = $idTypeTravailUniversitaire;
    }


}

