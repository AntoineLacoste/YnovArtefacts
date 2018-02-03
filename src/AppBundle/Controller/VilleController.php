<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ville;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;

/**
 * @Route("/ville")
 */
class VilleController extends Controller
{
    /**
     * @Route("/add", name="createVille")
     */
    public function addAction(Request $request) {
        $ville = new Ville();
        $VilleManager = $this->get('VilleManager');

        //GET Datas
        $data = $request->request->get("nom");

        //Setters
        $ville->setNom($data);

        //add
        $VilleManager->addVille($ville);

        $serializer = $this->get('SerializerJSON');
        $villeJson = $serializer->serializeJSON($ville);

        $response = new Response($villeJson);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
