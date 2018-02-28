<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="personne", indexes={@ORM\Index(name="FK_personne_personne", columns={"id_directeur"}), @ORM\Index(name="FK_personne_nationalite", columns={"id_nationalite"}), @ORM\Index(name="FK_personne_organisme", columns={"id_organisme"})})
 * @ORM\Entity
 */
class Personne
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="date_vie", type="string", length=10, nullable=true)
     */
    private $dateVie;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=50, nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_personne", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPersonne;

    /**
     * @var \AppBundle\Entity\Nationalite
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Nationalite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nationalite", referencedColumnName="id_nationalite")
     * })
     */
    private $Nationalite;

    /**
     * @var \AppBundle\Entity\Organisme
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Organisme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_organisme", referencedColumnName="id_organisme")
     * })
     */
    private $Organisme;

    /**
     * @var \AppBundle\Entity\Personne
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_directeur", referencedColumnName="id_personne")
     * })
     */
    private $Directeur;

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
     * @return string
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getDateVie() {
        return $this->dateVie;
    }

    /**
     * @param string $dateVie
     */
    public function setDateVie($dateVie) {
        $this->dateVie = $dateVie;
    }

    /**
     * @return string
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote($note) {
        $this->note = $note;
    }

    /**
     * @return int
     */
    public function getIdPersonne() {
        return $this->idPersonne;
    }

    /**
     * @param int $idPersonne
     */
    public function setIdPersonne($idPersonne) {
        $this->idPersonne = $idPersonne;
    }

    /**
     * @return Nationalite
     */
    public function getNationalite() {
        return $this->Nationalite;
    }

    /**
     * @param Nationalite $Nationalite
     */
    public function setNationalite($Nationalite) {
        $this->Nationalite = $Nationalite;
    }

    /**
     * @return Organisme
     */
    public function getOrganisme() {
        return $this->Organisme;
    }

    /**
     * @param Organisme $Organisme
     */
    public function setOrganisme($Organisme) {
        $this->Organisme = $Organisme;
    }

    /**
     * @return Personne
     */
    public function getDirecteur() {
        return $this->Directeur;
    }

    /**
     * @param Personne $Directeur
     */
    public function setDirecteur($Directeur) {
        $this->Directeur = $Directeur;
    }


}

