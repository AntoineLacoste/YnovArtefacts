<?php


namespace AppBundle\Services;

use AppBundle\Entity\Departement;
use AppBundle\Entity\LieuDits;
use Doctrine\ORM\EntityManager;


class DepartementManager extends Manager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Departement');
    }

    public function addDepartement(Departement $entity) {
        $this->add($entity);

        $this->session->getFlashBag()->add('success', 'élément correctement ajouté !');
    }
    public function getDepartement($id) {
        $this->getOne($id);

        $this->session->getFlashBag()->add('success', 'élément correctement ajouté !');
    }
}