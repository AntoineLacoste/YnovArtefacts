<?php


namespace AppBundle\Services;

use AppBundle\Entity\LieuDits;
use Doctrine\ORM\EntityManager;


class LieuDitsManager extends ServiceManager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:LieuDits');
    }

    public function addLieuDits(LieuDits $entity) {
        $this->add($entity);
    }

    public function getLieuDits($id) {
        return $this->getOne($id);
    }
}