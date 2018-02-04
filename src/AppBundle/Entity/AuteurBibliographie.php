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
    private $Bibliographie;

    /**
     * @var \AppBundle\Entity\Personne
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_auteur", referencedColumnName="id_personne")
     * })
     */
    private $Auteur;

    /**
     * @return int
     */
    public function getIdAuteurBibliographie(): int {
        return $this->idAuteurBibliographie;
    }

    /**
     * @param int $idAuteurBibliographie
     */
    public function setIdAuteurBibliographie(int $idAuteurBibliographie) {
        $this->idAuteurBibliographie = $idAuteurBibliographie;
    }

    /**
     * @return BibliographieV2
     */
    public function getBibliographie() {
        return $this->Bibliographie;
    }

    /**
     * @param BibliographieV2 $Bibliographie
     */
    public function setBibliographie(BibliographieV2 $Bibliographie) {
        $this->Bibliographie = $Bibliographie;
    }

    /**
     * @return Personne
     */
    public function getAuteur() {
        return $this->Auteur;
    }

    /**
     * @param Personne $Auteur
     */
    public function setAuteur(Personne $Auteur) {
        $this->Auteur = $Auteur;
    }


}

