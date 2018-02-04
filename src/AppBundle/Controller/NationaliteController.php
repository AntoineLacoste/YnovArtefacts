<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Nationalite;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/nationalite")
 */
class NationaliteController extends Controller
{
    /**
     * @Route("/add", name="nationaliteAdd")
     */
    public function addAction(Request $request)
    {
        $nationalite = new Nationalite();
        $nationaliteManager = $this->get('NationaliteManager');

        $data = $request->request;

        //Setters
        $nationalite->setNom($data->get("nom"));
        $nationalite->setAbv($data->get("abv"));

        //add
        $nationaliteManager->addNationalite($nationalite);

        $serializer = $this->get('SerializerJSON');
        $organismeJson = $serializer->serializeJSON($nationalite);

        $response = new Response($organismeJson);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
