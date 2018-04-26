<?php


namespace AppBundle\Services;

use AppBundle\Entity\Organisme;
use Doctrine\ORM\EntityManager;


class OrganismeManager extends ServiceManager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Organisme');
    }

    public function addOrganisme(Organisme $entity) {
        $this->add($entity);
    }

    public function getOrganisme($id) {
        return $this->getOne($id);
    }
}