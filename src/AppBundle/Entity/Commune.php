<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commune
 *
 * @ORM\Table(name="commune")
 * @ORM\Entity
 */
class Commune {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_commune", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommune;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @return int
     */
    public function getIdCommune(): int {
        return $this->idCommune;
    }

    /**
     * @param int $idCommune
     */
    public function setIdCommune(int $idCommune) {
        $this->idCommune = $idCommune;
    }

    /**
     * @return string
     */
    public function getNom(): string {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom) {
        $this->nom = $nom;
    }
}