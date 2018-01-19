<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuteurBibliographie
 *
 * @ORM\Table(name="auteur_bibliographie", indexes={@ORM\Index(name="FK_auteur_bibliographie_personne", columns={"id_auteur"}), @ORM\Index(name="FK_auteur_bibliographie_bibliographie_v2", columns={"id_bibliographie"})})
 * @ORM\Entity
 */
class AuteurBibliographie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_auteur_bibliographie", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAuteurBibliographie;

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
     * @var \AppBundle\Entity\Personne
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_auteur", referencedColumnName="id_personne")
     * })
     */
    private $idAuteur;

    /**
     * @return int
     */
    public function getIdAuteurBibliographie() {
        return $this->idAuteurBibliographie;
    }

    /**
     * @param int $idAuteurBibliographie
     */
    public function setIdAuteurBibliographie($idAuteurBibliographie) {
        $this->idAuteurBibliographie = $idAuteurBibliographie;
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
     * @return Personne
     */
    public function getIdAuteur() {
        return $this->idAuteur;
    }

    /**
     * @param Personne $idAuteur
     */
    public function setIdAuteur($idAuteur) {
        $this->idAuteur = $idAuteur;
    }


}

