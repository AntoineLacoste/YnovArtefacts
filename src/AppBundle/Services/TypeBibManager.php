<?php


namespace AppBundle\Services;

use AppBundle\Entity\TypeBib;
use Doctrine\ORM\EntityManager;


class TypeBibManager extends Manager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:TypeBib');
    }

    public function addTypeBib(TypeBib $entity) {
        $this->add($entity);
    }

    public function getTypeBib($id) {
        return $this->getOne($id);
    }
}