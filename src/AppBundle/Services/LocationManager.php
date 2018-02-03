<?php


namespace AppBundle\Services;

use AppBundle\Entity\Location;
use Doctrine\ORM\EntityManager;


class LocationManager extends Manager {

    public function __construct(EntityManager $entityManager) {
        parent::__construct($entityManager);
        $this->repository = $this->em->getRepository('AppBundle:Location');
    }

    public function addLocation(Location $entity) {
        $this->add($entity);
    }

    public function getLocation($id) {
        return $this->getOne($id);
    }
}