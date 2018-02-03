<?php

namespace AppBundle\Controller;

use AppBundle\Entity\LieuDits;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/lieuDits")
 */
class LieuDitsController extends Controller
{
    /**
     * @Route("/add", name="createLieuDits")
     */
    public function addAction(Request $request) {
        $lieuDit = new LieuDits();
        $lieuDitManager = $this->get('LieuDitsManager');

        //GET Datas
        $data = $request->request->get("nom");

        //Setters
        $lieuDit->setNom($data);

        //add
        $lieuDitManager->addLieuDits($lieuDit);

        $serializer = $this->get('SerializerJSON');
        $lieuDitJson = $serializer->serializeJSON($lieuDit);

        $response = new Response($lieuDitJson);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
