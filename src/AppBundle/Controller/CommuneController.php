<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Commune;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/commune")
 */
class CommuneController extends Controller
{
    /**
     * @Route("/add", name="createCommune")
     */
    public function addAction(Request $request) {
        $commune = new Commune();
        $communeManager = $this->get('CommuneManager');

        //GET Datas
        $data = $request->request->get("nom");

        //Setters
        $commune->setNom($data);

        //add
        $communeManager->addCommune($commune);

        $serializer = $this->get('SerializerJSON');
        $communeJson = $serializer->serializeJSON($commune);

        $response = new Response($communeJson);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
