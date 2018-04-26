<?php


namespace AppBundle\Services;

use AppBundle\Entity\Personne;
use Doctrine\ORM\EntityManager;


class PersonneManager extends ServiceManager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Personne');
    }

    public function addPersonne(Personne $entity) {
        $this->add($entity);
    }

    public function getPersonne($id) {
        return $this->getOne($id);
    }
}