<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ColNorme
 *
 * @ORM\Table(name="col_norme", indexes={@ORM\Index(name="FK_col_norme_collection", columns={"id_collection"}), @ORM\Index(name="FK_col_norme_norme", columns={"id_norme"})})
 * @ORM\Entity
 */
class ColNorme
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_col_norme", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idColNorme;

    /**
     * @var \AppBundle\Entity\Collection
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Collection")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_collection", referencedColumnName="id_collection")
     * })
     */
    private $idCollection;

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
    public function getIdColNorme() {
        return $this->idColNorme;
    }

    /**
     * @param int $idColNorme
     */
    public function setIdColNorme($idColNorme) {
        $this->idColNorme = $idColNorme;
    }

    /**
     * @return Collection
     */
    public function getIdCollection() {
        return $this->idCollection;
    }

    /**
     * @param Collection $idCollection
     */
    public function setIdCollection($idCollection) {
        $this->idCollection = $idCollection;
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


}

