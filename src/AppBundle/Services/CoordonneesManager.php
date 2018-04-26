<?php


namespace AppBundle\Services;

use AppBundle\Entity\Coordonnees;
use Doctrine\ORM\EntityManager;


class CoordonneesManager extends ServiceManager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Coordonnees');
    }

    public function addCoordonnees(Coordonnees $entity) {
        $this->add($entity);
    }

    public function getCoordonnees($id) {
        return $this->getOne($id);
    }
}