<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Commune;
use AppBundle\Entity\Periodique;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/periodique")
 */
class PeriodiqueController extends Controller
{
    /**
     * @Route("/add", name="createPeriodique")
     */
    public function addAction(Request $request) {
        $periodique = new Periodique();
        $periodiqueManager = $this->get('PeriodiqueManager');

        //GET Datas
        $data = $request->request->get("nom");

        //Setters
        $periodique->setNom($data);

        //add
        $periodiqueManager->addPeriodique($periodique);

        $serializer = $this->get('SerializerJSON');
        $periodiqueJson = $serializer->serializeJSON($periodique);

        $response = new Response($periodiqueJson);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
