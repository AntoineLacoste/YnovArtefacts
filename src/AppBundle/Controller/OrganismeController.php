<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Organisme;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/organisme")
 */
class OrganismeController extends Controller
{
    /**
     * @Route("/add", name="organismeAdd")
     */
    public function addAction(Request $request)
    {
        $organisme = new Organisme();
        $organismeManager = $this->get('OrganismeManager');
        $typeOrganismeManager = $this->get('TypeOrganismeManager');

        $data = $request->request;

        //Setters
        $organisme->setNom($data->get("nom"));

        $logger = $this->get('logger');
        $logger->info(print_r($data, true));
        $typeOrganisme = $typeOrganismeManager->getTypeOrganisme($data->get("typeOrganisme"));
        $organisme->setTypeOrganisme($typeOrganisme);

        //add
        $organismeManager->addOrganisme($organisme);

        $serializer = $this->get('SerializerJSON');
        $organismeJson = $serializer->serializeJSON($organisme);

        $response = new Response($organismeJson);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
