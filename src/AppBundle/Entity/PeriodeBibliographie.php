<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PeriodeBibliographie
 *
 * @ORM\Table(name="periode_bibliographie", indexes={@ORM\Index(name="FK_periode_bibliographie_bibliographie", columns={"id_bibliographie"}), @ORM\Index(name="FK_periode_bibliographie_periodes", columns={"id_periode"})})
 * @ORM\Entity
 */
class PeriodeBibliographie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_periodes_bibliographie", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPeriodesBibliographie;

    /**
     * @var \AppBundle\Entity\BibliographieV2
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\BibliographieV2")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bibliographie", referencedColumnName="id_bibliographie")
     * })
     */
    private $idBibliographie;

    /**
     * @var \AppBundle\Entity\Periodes
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Periodes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_periode", referencedColumnName="id_periode")
     * })
     */
    private $idPeriode;

    /**
     * @return int
     */
    public function getIdPeriodesBibliographie() {
        return $this->idPeriodesBibliographie;
    }

    /**
     * @param int $idPeriodesBibliographie
     */
    public function setIdPeriodesBibliographie($idPeriodesBibliographie) {
        $this->idPeriodesBibliographie = $idPeriodesBibliographie;
    }

    /**
     * @return BibliographieV2
     */
    public function getIdBibliographie() {
        return $this->idBibliographie;
    }

    /**
     * @param BibliographieV2 $idBibliographie
     */
    public function setIdBibliographie($idBibliographie) {
        $this->idBibliographie = $idBibliographie;
    }

    /**
     * @return Periodes
     */
    public function getIdPeriode() {
        return $this->idPeriode;
    }

    /**
     * @param Periodes $idPeriode
     */
    public function setIdPeriode($idPeriode) {
        $this->idPeriode = $idPeriode;
    }


}

