<?php


namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;


class VilleManager extends ServiceManager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Ville');
    }

    public function addVille($ville) {
        $this->add($ville);
    }

    public function getVille($id) {
        return $this->getOne($id);
    }
}