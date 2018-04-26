<?php


namespace AppBundle\Services;


use AppBundle\Entity\Pays;
use Doctrine\ORM\EntityManager;


class PaysManager extends ServiceManager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Pays');
    }

    public function addPays(Pays $entity) {
        $this->add($entity);
    }

    public function getPays($id) {
        return $this->getOne($id);
    }
}