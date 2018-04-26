<?php


namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;


class EditeurManager extends ServiceManager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Editeur');
    }

    public function addEditeur($entity) {
        $this->add($entity);
    }

    public function getEditeur($id){
        return $this->getOne($id);
    }
}