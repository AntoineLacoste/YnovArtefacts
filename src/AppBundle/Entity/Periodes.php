<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Periodes
 *
 * @ORM\Table(name="periodes")
 * @ORM\Entity
 */
class Periodes
{
    /**
     * @var string
     *
     * @ORM\Column(name="val_periode", type="text", length=16777215, nullable=false)
     */
    private $valPeriode;

    /**
     * @var string
     *
     * @ORM\Column(name="range", type="string", length=50, nullable=false)
     */
    private $range;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_periode", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPeriode;

    /**
     * @return string
     */
    public function getValPeriode() {
        return $this->valPeriode;
    }

    /**
     * @param string $valPeriode
     */
    public function setValPeriode($valPeriode) {
        $this->valPeriode = $valPeriode;
    }

    /**
     * @return string
     */
    public function getRange() {
        return $this->range;
    }

    /**
     * @param string $range
     */
    public function setRange($range) {
        $this->range = $range;
    }

    /**
     * @return int
     */
    public function getIdPeriode() {
        return $this->idPeriode;
    }

    /**
     * @param int $idPeriode
     */
    public function setIdPeriode($idPeriode) {
        $this->idPeriode = $idPeriode;
    }


}

