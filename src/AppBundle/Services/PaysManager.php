<?php


namespace AppBundle\Services;


use AppBundle\Entity\Pays;
use Doctrine\ORM\EntityManager;


class PaysManager extends Manager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Pays');
    }

    public function addPays(Pays $entity) {
        $this->add($entity);

        $this->session->getFlashBag()->add('success', 'élément correctement ajouté !');
    }

    public function getPays($id) {
        $this->getOne($id);

        $this->session->getFlashBag()->add('success', 'élément correctement ajouté !');
    }
}