<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Periodique
 *
 * @ORM\Table(name="periodique")
 * @ORM\Entity
 */
class Periodique
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_periodique", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPeriodique;

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
    public function getIdPeriodique() {
        return $this->idPeriodique;
    }

    /**
     * @param int $idPeriodique
     */
    public function setIdPeriodique($idPeriodique) {
        $this->idPeriodique = $idPeriodique;
    }


}

