<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organisme
 *
 * @ORM\Table(name="organisme", indexes={@ORM\Index(name="FK_organisme_type_organisme", columns={"id_type_organisme"})})
 * @ORM\Entity
 */
class Organisme
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=120, nullable=false)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_organisme", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrganisme;

    /**
     * @var \AppBundle\Entity\TypeOrganisme
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeOrganisme")
     * @ORM\JoinColumn(name="id_type_organisme", referencedColumnName="id_type_organisme")
     */
    private $typeOrganisme;

    /**
     * @return TypeOrganisme
     */
    public function getTypeOrganisme(): TypeOrganisme
    {
        return $this->typeOrganisme;
    }

    /**
     * @param TypeOrganisme $typeOrganisme
     */
    public function setTypeOrganisme(TypeOrganisme $typeOrganisme): void
    {
        $this->typeOrganisme = $typeOrganisme;
    }

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
     * @return int
     */
    public function getIdOrganisme() {
        return $this->idOrganisme;
    }

    /**
     * @param int $idOrganisme
     */
    public function setIdOrganisme($idOrganisme) {
        $this->idOrganisme = $idOrganisme;
    }




}

