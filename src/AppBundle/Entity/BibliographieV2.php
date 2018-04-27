<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BibliographieV2
 *
 * @ORM\Table(name="bibliographie_v2", indexes={@ORM\Index(name="id_bibliographie", columns={"id_bibliographie"}), @ORM\Index(name="FK_bibliographie_v2_editeur", columns={"id_editeur"}), @ORM\Index(name="FK_bibliographie_v2_bibliographie_v2", columns={"id_bibliographie_parent"}), @ORM\Index(name="FK_bibliographie_v2_ville", columns={"id_ville_edition"}), @ORM\Index(name="FK_bibliographie_v2_type_bib", columns={"id_type_bib"}), @ORM\Index(name="FK_bibliographie_v2_collection", columns={"id_collection"}), @ORM\Index(name="FK_bibliographie_v2_periodique", columns={"id_periodique"})})
 * @ORM\Entity
 */
class BibliographieV2
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="confirmed", type="boolean", nullable=false)
     */
    private $confirmed;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_ref", type="string", length=1024, nullable=false)
     */
    private $titreRef;

    /**
     * @var string
     *
     * @ORM\Column(name="abv_site_marchande", type="string", length=12, nullable=false)
     */
    private $abvSiteMarchande;

    /**
     * @var string
     *
     * @ORM\Column(name="tome", type="string", length=50, nullable=true)
     */
    private $tome;

    /**
     * @var string
     *
     * @ORM\Column(name="volume", type="string", length=50, nullable=true)
     */
    private $volume;

    /**
     * @var string
     *
     * @ORM\Column(name="num_collection", type="string", length=50, nullable=true)
     */
    private $numCollection;

    /**
     * @var string
     *
     * @ORM\Column(name="pagination", type="string", length=50, nullable=true)
     */
    private $pagination;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_edition", type="date", nullable=false)
     */
    private $dateEdition;

    /**
     * @var string
     *
     * @ORM\Column(name="ISBN", type="string", length=50, nullable=true)
     */
    private $isbn;

    /**
     * @var string
     *
     * @ORM\Column(name="ISSN", type="string", length=50, nullable=true)
     */
    private $issn;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_bibliographie", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idBibliographie;

    /**
     * @var \AppBundle\Entity\BibliographieV2
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\BibliographieV2")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bibliographie_parent", referencedColumnName="id_bibliographie")
     * })
     */
    private $bibliographieParent;

    /**
     * @var \AppBundle\Entity\Collection
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Collection")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_collection", referencedColumnName="id_collection")
     * })
     */
    private $collection;

    /**
     * @var \AppBundle\Entity\Editeur
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Editeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_editeur", referencedColumnName="id_editeur")
     * })
     */
    private $editeur;

    /**
     * @var \AppBundle\Entity\Periodique
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Periodique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_periodique", referencedColumnName="id_periodique")
     * })
     */
    private $periodique;

    /**
     * @var \AppBundle\Entity\TypeBib
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeBib")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_bib", referencedColumnName="id_type")
     * })
     */
    private $typeBib;

    /**
     * @var \AppBundle\Entity\Ville
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ville_edition", referencedColumnName="id_ville")
     * })
     */
    private $villeEdition;



    /**
     * @return bool
     */
    public function isConfirmed(): bool
    {
        return $this->confirmed;
    }

    /**
     * @param bool $confirmed
     */
    public function setConfirmed(bool $confirmed): void
    {
        $this->confirmed = $confirmed;
    }

    /**
     * @return string
     */
    public function getTitreRef()
    {
        return $this->titreRef;
    }

    /**
     * @param string $titreRef
     */
    public function setTitreRef(string $titreRef): void
    {
        $this->titreRef = $titreRef;
    }

    /**
     * @return string
     */
    public function getAbvSiteMarchande()
    {
        return $this->abvSiteMarchande;
    }

    /**
     * @param string $abvSiteMarchande
     */
    public function setAbvSiteMarchande(string $abvSiteMarchande): void
    {
        $this->abvSiteMarchande = $abvSiteMarchande;
    }

    /**
     * @return string
     */
    public function getTome()
    {
        return $this->tome;
    }

    /**
     * @param string $tome
     */
    public function setTome(string $tome): void
    {
        $this->tome = $tome;
    }

    /**
     * @return string
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param string $volume
     */
    public function setVolume(string $volume): void
    {
        $this->volume = $volume;
    }

    /**
     * @return string
     */
    public function getNumCollection()
    {
        return $this->numCollection;
    }

    /**
     * @param string $numCollection
     */
    public function setNumCollection(string $numCollection): void
    {
        $this->numCollection = $numCollection;
    }

    /**
     * @return string
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @param string $pagination
     */
    public function setPagination(string $pagination): void
    {
        $this->pagination = $pagination;
    }

    /**
     * @return \DateTime
     */
    public function getDateEdition()
    {
        return $this->dateEdition;
    }

    /**
     * @param \DateTime $dateEdition
     */
    public function setDateEdition(\DateTime $dateEdition): void
    {
        $this->dateEdition = $dateEdition;
    }

    /**
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param string $isbn
     */
    public function setIsbn(string $isbn): void
    {
        $this->isbn = $isbn;
    }

    /**
     * @return string
     */
    public function getIssn()
    {
        return $this->issn;
    }

    /**
     * @param string $issn
     */
    public function setIssn(string $issn): void
    {
        $this->issn = $issn;
    }

    /**
     * @return int
     */
    public function getIdBibliographie()
    {
        return $this->idBibliographie;
    }

    /**
     * @param int $idBibliographie
     */
    public function setIdBibliographie(int $idBibliographie): void
    {
        $this->idBibliographie = $idBibliographie;
    }

    /**
     * @return BibliographieV2
     */
    public function getBibliographieParent()
    {
        return $this->bibliographieParent;
    }

    /**
     * @param BibliographieV2 $bibliographieParent
     */
    public function setBibliographieParent(BibliographieV2 $bibliographieParent): void
    {
        $this->bibliographieParent = $bibliographieParent;
    }

    /**
     * @return Collection
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param Collection $collection
     */
    public function setCollection(Collection $collection): void
    {
        $this->collection = $collection;
    }

    /**
     * @return Editeur
     */
    public function getEditeur()
    {
        return $this->editeur;
    }

    /**
     * @param Editeur $editeur
     */
    public function setEditeur(Editeur $editeur): void
    {
        $this->editeur = $editeur;
    }

    /**
     * @return Periodique
     */
    public function getPeriodique()
    {
        return $this->periodique;
    }

    /**
     * @param Periodique $periodique
     */
    public function setPeriodique(Periodique $periodique): void
    {
        $this->periodique = $periodique;
    }

    /**
     * @return TypeBib
     */
    public function getTypeBib()
    {
        return $this->typeBib;
    }

    /**
     * @param TypeBib $typeBib
     */
    public function setTypeBib(TypeBib $typeBib): void
    {
        $this->typeBib = $typeBib;
    }

    /**
     * @return Ville
     */
    public function getVilleEdition()
    {
        return $this->villeEdition;
    }

    /**
     * @param Ville $villeEdition
     */
    public function setVilleEdition(Ville $villeEdition): void
    {
        $this->villeEdition = $villeEdition;
    }

}



