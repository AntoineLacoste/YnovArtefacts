<?php


namespace AppBundle\Services;

use AppBundle\Entity\Payment;
use Doctrine\ORM\EntityManager;


class EditeurManager extends Manager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Editeur');
    }

    public function addEditeur($entity) {
        $this->add($entity);
    }
}