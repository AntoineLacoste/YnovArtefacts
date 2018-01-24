<?php


namespace AppBundle\Services;

use AppBundle\Entity\Payment;
use Doctrine\ORM\EntityManager;


class VilleManager extends Manager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Ville');
    }

    public function addVille($ville) {
        $this->add($ville);

        $this->session->getFlashBag()->add('success', 'ville correctement ajouté !');
    }
}