<?php


namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;


class PeriodiqueManager extends ServiceManager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Periodique');
    }

    public function addPeriodique($entity) {
        $this->add($entity);
    }
}