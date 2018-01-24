<?php


namespace AppBundle\Services;

use AppBundle\Entity\Payment;
use Doctrine\ORM\EntityManager;


class PeriodiqueManager extends Manager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Periodique');
    }

    public function addPeriodique($entity) {
        $this->add($entity);

        $this->session->getFlashBag()->add('success', 'élément correctement ajouté !');
    }
}