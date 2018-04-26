<?php


namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;


class AuteurBibliographieManager extends ServiceManager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:AuteurBibliographie');
    }

    public function addAuteurBibliographie($entity) {
        $this->add($entity);
    }
}