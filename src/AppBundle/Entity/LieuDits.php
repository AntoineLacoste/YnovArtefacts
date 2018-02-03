<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LieuDits
 *
 * @ORM\Table(name="lieu_dits")
 * @ORM\Entity
 */
class LieuDits {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_lieu_dits", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLieuDits;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @return int
     */
    public function getIdLieuDits(): int {
        return $this->idLieuDits;
    }

    /**
     * @param int $idLieuDits
     */
    public function setIdLieuDits(int $idLieuDits) {
        $this->idLieuDits = $idLieuDits;
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