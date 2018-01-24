<?php


namespace AppBundle\Services;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Session\Session;

class Manager {
    protected $em;
    protected $repository;
    protected $session;

    public function __construct(EntityManager $entityManager) {
        $this->em = $entityManager;

        $this->session = new Session();
    }

    public function add($object){
        try{
            $this->flush($object);
            return true;
        }
        catch(Exception $e){
            return false;
        }

    }

    public function update($object){
        try{
            $this->flush($object);
            return true;
        }
        catch(Exception $e){
            return false;
        }
    }

    public function remove($_object) {
        try{
            $this->em->remove($_object);
            $this->em->flush();
            return true;
        }
        catch(Exception $e){
            return false;
        }
    }

    public function flush($_object) {
        try{
            $this->em->persist($_object);
            $this->em->flush();
            return true;
        }
        catch(Exception $e){
            return false;
        }
    }

    public function getAll($limit = 0) {
        if($limit > 0){
            return $this->repository->findBy([], [], $limit);
        }
        return $this->repository->findAll();
    }

    public function getOne($id) {
        return $this->repository->find($id);
    }

    public function getRepository($name)
    {
        $this->repository = $this->em->getRepository($name);
    }
}