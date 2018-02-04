<?php


namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;


class BibliographieManager extends Manager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:BibliographieV2');
    }

    public function addBibliographie($entity) {
        $this->add($entity);

        $this->session->getFlashBag()->add('success', 'élément correctement ajouté !');
    }
}