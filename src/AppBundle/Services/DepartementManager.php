<?php


namespace AppBundle\Services;

use AppBundle\Entity\Departement;
use AppBundle\Entity\LieuDits;
use Doctrine\ORM\EntityManager;


class DepartementManager extends ServiceManager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Departement');
    }

    public function addDepartement(Departement $entity) {
        $this->add($entity);
    }
    public function getDepartement($id) {
        return $this->getOne($id);
    }
}