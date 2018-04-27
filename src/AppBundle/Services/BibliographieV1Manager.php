<?php


namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;

class BibliographieV1Manager extends ServiceManager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:BibliographieV1');
    }

    public function addBibliographie($entity) {
        $this->add($entity);

        $this->session->getFlashBag()->add('success', 'élément correctement ajouté !');
    }

    public function getBibliographieToConfirm() {
        return $this->repository->getBibliographieToConfirm();
    }

    public function setConfirmed($id) {
        return $this->repository->setConfirmed($id);
    }
}