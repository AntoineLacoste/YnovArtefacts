<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bibliographie
 *
 * @ORM\Table(name="bibliographie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BibliographieV1Repository")
 */
class BibliographieV1
{
    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string")
     */
    private $auteur;

    /**
     * @var string
     * @ORM\Column(name="titreref", type="string")
     */
    private $titreRef;

    /**
     * @var string
     *
     * @ORM\Column(name="dicoref", type="string")
     */
    private $dicoref;

    /**
     * @var string
     *
     * @ORM\Column(name="www", type="string")
     */
    private $www;

    /**
     * @var string
     *
     * @ORM\Column(name="th1", type="string")
     */
    private $th1;

    /**
     * @var string
     *
     * @ORM\Column(name="th2", type="string")
     */
    private $th2;

    /**
     * @var string
     *
     * @ORM\Column(name="th3", type="string")
     */
    private $th3;

    /**
     * @var string
     *
     * @ORM\Column(name="th4", type="string")
     */
    private $th4;

    /**
     * @var string
     *
     * @ORM\Column(name="th5", type="string")
     */
    private $th5;

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ed", type="string")
     */
    private $ed;

    /**
     * @var string
     *
     * @ORM\Column(name="achat", type="string")
     */
    private $achat;

    /**
     * @var string
     *
     * @ORM\Column(name="CR1", type="string")
     */
    private $CR1;

    /**
     * @var string
     *
     * @ORM\Column(name="CR2", type="string")
     */
    private $CR2;


    /**
     * @var string
     *
     * @ORM\Column(name="confirmed", type="integer")
     */
    private $confirmed = 0;

    /**
     * @return string
     */
    public function getAuteur(): string {
        return $this->auteur;
    }

    /**
     * @param string $auteur
     */
    public function setAuteur(string $auteur) {
        $this->auteur = $auteur;
    }

    /**
     * @return string
     */
    public function getTitreRef(): string {
        return $this->titreRef;
    }

    /**
     * @param string $titreRef
     */
    public function setTitreRef(string $titreRef) {
        $this->titreRef = $titreRef;
    }

    /**
     * @return string
     */
    public function getDicoref(): string {
        return $this->dicoref;
    }

    /**
     * @param string $dicoref
     */
    public function setDicoref(string $dicoref) {
        $this->dicoref = $dicoref;
    }

    /**
     * @return string
     */
    public function getWww(): string {
        return $this->www;
    }

    /**
     * @param string $www
     */
    public function setWww(string $www) {
        $this->www = $www;
    }

    /**
     * @return string
     */
    public function getTh1(): string {
        return $this->th1;
    }

    /**
     * @param string $th1
     */
    public function setTh1(string $th1) {
        $this->th1 = $th1;
    }

    /**
     * @return string
     */
    public function getTh2(): string {
        return $this->th2;
    }

    /**
     * @param string $th2
     */
    public function setTh2(string $th2) {
        $this->th2 = $th2;
    }

    /**
     * @return string
     */
    public function getTh3(): string {
        return $this->th3;
    }

    /**
     * @param string $th3
     */
    public function setTh3(string $th3) {
        $this->th3 = $th3;
    }

    /**
     * @return string
     */
    public function getTh4(): string {
        return $this->th4;
    }

    /**
     * @param string $th4
     */
    public function setTh4(string $th4) {
        $this->th4 = $th4;
    }

    /**
     * @return string
     */
    public function getTh5(): string {
        return $this->th5;
    }

    /**
     * @param string $th5
     */
    public function setTh5(string $th5) {
        $this->th5 = $th5;
    }

    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id) {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getEd(): string {
        return $this->ed;
    }

    /**
     * @param string $ed
     */
    public function setEd(string $ed) {
        $this->ed = $ed;
    }

    /**
     * @return string
     */
    public function getAchat(): string {
        return $this->achat;
    }

    /**
     * @param string $achat
     */
    public function setAchat(string $achat) {
        $this->achat = $achat;
    }

    /**
     * @return string
     */
    public function getCR1(): string {
        return $this->CR1;
    }

    /**
     * @param string $CR1
     */
    public function setCR1(string $CR1) {
        $this->CR1 = $CR1;
    }

    /**
     * @return string
     */
    public function getCR2(): string {
        return $this->CR2;
    }

    /**
     * @param string $CR2
     */
    public function setCR2(string $CR2) {
        $this->CR2 = $CR2;
    }

    /**
     * @return string
     */
    public function getConfirmed(): string {
        return $this->confirmed;
    }

    /**
     * @param string $confirmed
     */
    public function setConfirmed(string $confirmed) {
        $this->confirmed = $confirmed;
    }


}



