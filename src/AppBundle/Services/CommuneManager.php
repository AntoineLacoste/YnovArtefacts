<?php


namespace AppBundle\Services;

use AppBundle\Entity\Commune;
use Doctrine\ORM\EntityManager;


class CommuneManager extends ServiceManager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Commune');
    }

    public function addCommune(Commune $entity) {
        $this->add($entity);
    }

    public function getCommune($id) {
        return $this->getOne($id);

    }
}