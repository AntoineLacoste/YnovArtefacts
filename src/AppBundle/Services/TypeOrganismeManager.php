<?php


namespace AppBundle\Services;

use AppBundle\Entity\TypeOrganisme;
use Doctrine\ORM\EntityManager;


class TypeOrganismeManager extends ServiceManager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:TypeOrganisme');
    }

    public function addTypeOrganisme(TypeOrganisme $entity) {
        $this->add($entity);
    }

    public function getTypeOrganisme($id) {
        return $this->getOne($id);
    }
}