<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Departement;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/departement")
 */
class DepartementController extends Controller
{
    /**
     * @Route("/add", name="createDepartement")
     */
    public function addAction(Request $request) {
        $departement = new Departement();
        $departementManager = $this->get('DepartementManager');

        //GET Datas
        $data = $request->request->get("nom");

        //Setters
        $departement->setNom($data);

        //add
        $departementManager->addDepartement($departement);

        $serializer = $this->get('SerializerJSON');
        $departementJson = $serializer->serializeJSON($departement);

        $response = new Response($departementJson);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
