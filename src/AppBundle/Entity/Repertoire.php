<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Repertoire
 *
 * @ORM\Table(name="repertoire", indexes={@ORM\Index(name="FK_repertoire_personne", columns={"id_personne"})})
 * @ORM\Entity
 */
class Repertoire
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=50, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=1024, nullable=false)
     */
    private $reference;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_repertoire", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRepertoire;

    /**
     * @var \AppBundle\Entity\Personne
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_personne", referencedColumnName="id_personne")
     * })
     */
    private $idPersonne;

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
     * @return string
     */
    public function getReference() {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference) {
        $this->reference = $reference;
    }

    /**
     * @return int
     */
    public function getIdRepertoire() {
        return $this->idRepertoire;
    }

    /**
     * @param int $idRepertoire
     */
    public function setIdRepertoire($idRepertoire) {
        $this->idRepertoire = $idRepertoire;
    }

    /**
     * @return Personne
     */
    public function getIdPersonne() {
        return $this->idPersonne;
    }

    /**
     * @param Personne $idPersonne
     */
    public function setIdPersonne($idPersonne) {
        $this->idPersonne = $idPersonne;
    }


}

