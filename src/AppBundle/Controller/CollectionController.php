<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Collection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/collection")
 */
class CollectionController extends Controller
{
    /**
     * @Route("/add", name="createCollection")
     */
    public function addAction(Request $request) {
        $collection = new Collection();
        $collectionManager = $this->get('CollectionManager');

        //GET Datas
        $data = $request->request->get("nom");

        //Setters
        $collection->setNom($data);

        //add
        $collectionManager->addCollection($collection);

        $serializer = $this->get('SerializerJSON');
        $collectionJson = $serializer->serializeJSON($collection);

        $response = new Response($collectionJson);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
