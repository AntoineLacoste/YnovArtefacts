<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity
 */
class Pays
{
    /**
     * @var string
     *
     * @ORM\Column(name="code_pays", type="string", length=7, nullable=false)
     */
    private $codePays;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_fr", type="string", length=30, nullable=false)
     */
    private $paysFr;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_gb", type="string", length=30, nullable=false)
     */
    private $paysGb;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_de", type="string", length=30, nullable=false)
     */
    private $paysDe;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_es", type="string", length=30, nullable=false)
     */
    private $paysEs;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_it", type="string", length=30, nullable=false)
     */
    private $paysIt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPays;

    /**
     * @return string
     */
    public function getCodePays() {
        return $this->codePays;
    }

    /**
     * @param string $codePays
     */
    public function setCodePays($codePays) {
        $this->codePays = $codePays;
    }

    /**
     * @return string
     */
    public function getPaysFr() {
        return $this->paysFr;
    }

    /**
     * @param string $paysFr
     */
    public function setPaysFr($paysFr) {
        $this->paysFr = $paysFr;
    }

    /**
     * @return string
     */
    public function getPaysGb() {
        return $this->paysGb;
    }

    /**
     * @param string $paysGb
     */
    public function setPaysGb($paysGb) {
        $this->paysGb = $paysGb;
    }

    /**
     * @return string
     */
    public function getPaysDe() {
        return $this->paysDe;
    }

    /**
     * @param string $paysDe
     */
    public function setPaysDe($paysDe) {
        $this->paysDe = $paysDe;
    }

    /**
     * @return string
     */
    public function getPaysEs() {
        return $this->paysEs;
    }

    /**
     * @param string $paysEs
     */
    public function setPaysEs($paysEs) {
        $this->paysEs = $paysEs;
    }

    /**
     * @return string
     */
    public function getPaysIt() {
        return $this->paysIt;
    }

    /**
     * @param string $paysIt
     */
    public function setPaysIt($paysIt) {
        $this->paysIt = $paysIt;
    }

    /**
     * @return int
     */
    public function getIdPays() {
        return $this->idPays;
    }

    /**
     * @param int $idPays
     */
    public function setIdPays($idPays) {
        $this->idPays = $idPays;
    }


}

