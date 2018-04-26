<?php


namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;


class CollectionManager extends ServiceManager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Collection');
    }

    public function addCollection($entity) {
        $this->add($entity);
    }

    public function getCollection($id){
        return $this->getOne($id);
    }
}