<?php


namespace AppBundle\Services;

use AppBundle\Entity\Commune;
use Doctrine\ORM\EntityManager;


class CommuneManager extends Manager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Commune');
    }

    public function addCommune(Commune $entity) {
        $this->add($entity);

        $this->session->getFlashBag()->add('success', 'élément correctement ajouté !');
    }

    public function getCommune($id) {
        $this->getOne($id);

        $this->session->getFlashBag()->add('success', 'élément correctement ajouté !');
    }
}