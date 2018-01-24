<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeOrganisme
 *
 * @ORM\Table(name="type_organisme")
 * @ORM\Entity
 */
class TypeOrganisme
{
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=50, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_organisme", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypeOrganisme;

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
    public function getIdTypeOrganisme() {
        return $this->idTypeOrganisme;
    }

    /**
     * @param int $idTypeOrganisme
     */
    public function setIdTypeOrganisme($idTypeOrganisme) {
        $this->idTypeOrganisme = $idTypeOrganisme;
    }


}

