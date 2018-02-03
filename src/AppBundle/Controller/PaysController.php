<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Collection;
use AppBundle\Entity\Pays;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/pays")
 */
class PaysController extends Controller {
    /**
     * @Route("/add", name="paysAdd")
     */
    public function paysAdd(Request $request) {
        $pays = new Pays();

        $paysManager = $this->get('PaysManager');

        $data = $request->request;

        $pays->setCodePays($data->get("codePays"));
        $pays->setPaysFr($data->get("paysFr"));
        $pays->setPaysGb($data->get("paysGb"));
        $pays->setPaysDe($data->get("paysDe"));
        $pays->setPaysIt($data->get("paysIt"));
        $pays->setPaysEs($data->get("paysEs"));

        //add
        $paysManager->addPays($pays);


        $serializer = $this->get('SerializerJSON');
        $paysJson = $serializer->serializeJSON($pays);

        $response = new Response($paysJson);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
