<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Norme
 *
 * @ORM\Table(name="norme")
 * @ORM\Entity
 */
class Norme
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
     * @ORM\Column(name="id_norme", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNorme;

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
    public function getIdNorme() {
        return $this->idNorme;
    }

    /**
     * @param int $idNorme
     */
    public function setIdNorme($idNorme) {
        $this->idNorme = $idNorme;
    }


}

