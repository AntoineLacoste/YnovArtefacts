<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TypeOrganisme;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/typeOrganisme")
 */
class TypeOrganismeController extends Controller
{
    /**
     * @Route("/add", name="typeOrganismeAdd")
     */
    public function addAction(Request $request)
    {
        $typeOrganisme = new TypeOrganisme();
        $typeOrganismeManager = $this->get('TypeOrganismeManager');

        $data = $request->request;

        //Setters
        $typeOrganisme->setDescription($data->get("description"));

        //add
        $typeOrganismeManager->addTypeOrganisme($typeOrganisme);

        $serializer = $this->get('SerializerJSON');
        $typeOrganismeJson = $serializer->serializeJSON($typeOrganisme);

        $response = new Response($typeOrganismeJson);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
