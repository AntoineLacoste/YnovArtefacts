<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompteRendu
 *
 * @ORM\Table(name="compte_rendu", indexes={@ORM\Index(name="FK_compte_rendu_bibliographie_v2", columns={"id_bibliographie"}), @ORM\Index(name="FK_auteur", columns={"id_auteur"})})
 * @ORM\Entity
 */
class CompteRendu
{
    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="string", length=1024, nullable=false)
     */
    private $lien;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_compte-rendu", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCompteRendu;

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
     * @var \AppBundle\Entity\BibliographieV2
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\BibliographieV2")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bibliographie", referencedColumnName="id_bibliographie")
     * })
     */
    private $idBibliographie;

    /**
     * @return string
     */
    public function getLien() {
        return $this->lien;
    }

    /**
     * @param string $lien
     */
    public function setLien($lien) {
        $this->lien = $lien;
    }

    /**
     * @return int
     */
    public function getIdCompteRendu() {
        return $this->idCompteRendu;
    }

    /**
     * @param int $idCompteRendu
     */
    public function setIdCompteRendu($idCompteRendu) {
        $this->idCompteRendu = $idCompteRendu;
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


}

