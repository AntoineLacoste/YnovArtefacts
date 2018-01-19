<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerNorme
 *
 * @ORM\Table(name="per_norme", indexes={@ORM\Index(name="FK_per_norme_periodique", columns={"id_periodique"}), @ORM\Index(name="FK_per_norme_norme", columns={"id_norme"})})
 * @ORM\Entity
 */
class PerNorme
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=124, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_per_norme", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPerNorme;

    /**
     * @var \AppBundle\Entity\Norme
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Norme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_norme", referencedColumnName="id_norme")
     * })
     */
    private $idNorme;

    /**
     * @var \AppBundle\Entity\Periodique
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Periodique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_periodique", referencedColumnName="id_periodique")
     * })
     */
    private $idPeriodique;

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
    public function getIdPerNorme() {
        return $this->idPerNorme;
    }

    /**
     * @param int $idPerNorme
     */
    public function setIdPerNorme($idPerNorme) {
        $this->idPerNorme = $idPerNorme;
    }

    /**
     * @return Norme
     */
    public function getIdNorme() {
        return $this->idNorme;
    }

    /**
     * @param Norme $idNorme
     */
    public function setIdNorme($idNorme) {
        $this->idNorme = $idNorme;
    }

    /**
     * @return Periodique
     */
    public function getIdPeriodique() {
        return $this->idPeriodique;
    }

    /**
     * @param Periodique $idPeriodique
     */
    public function setIdPeriodique($idPeriodique) {
        $this->idPeriodique = $idPeriodique;
    }


}

