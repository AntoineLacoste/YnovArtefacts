<?php


namespace AppBundle\Services;

use AppBundle\Entity\Coordonnees;
use Doctrine\ORM\EntityManager;


class CoordonneesManager extends Manager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Coordonnees');
    }

    public function addCoordonnees(Coordonnees $entity) {
        $this->add($entity);

        $this->session->getFlashBag()->add('success', 'élément correctement ajouté !');
    }

    public function getCoordonnees($id) {
        $this->getOne($id);

        $this->session->getFlashBag()->add('success', 'élément correctement ajouté !');
    }
}