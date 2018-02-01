<?php


namespace AppBundle\Services;

use AppBundle\Entity\LieuDits;
use Doctrine\ORM\EntityManager;


class LieuDitsManager extends Manager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:LieuDits');
    }

    public function addLieuDits(LieuDits $entity) {
        $this->add($entity);

        $this->session->getFlashBag()->add('success', 'élément correctement ajouté !');
    }

    public function getLieuDits($id) {
        $this->getOne($id);

        $this->session->getFlashBag()->add('success', 'élément correctement ajouté !');
    }
}