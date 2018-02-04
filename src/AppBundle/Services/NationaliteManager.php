<?php


namespace AppBundle\Services;

use AppBundle\Entity\Nationalite;
use Doctrine\ORM\EntityManager;


class NationaliteManager extends Manager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Nationalite');
    }

    public function addNationalite(Nationalite $entity) {
        $this->add($entity);
    }

    public function getNationalite($id) {
        return $this->getOne($id);
    }
}