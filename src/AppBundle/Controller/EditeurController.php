<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Commune;
use AppBundle\Entity\Coordonnees;
use AppBundle\Entity\Departement;
use AppBundle\Entity\Editeur;
use AppBundle\Entity\LieuDits;
use AppBundle\Entity\Location;
use AppBundle\Entity\Pays;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/editeur")
 */
class EditeurController extends Controller {
    /**
     * @Route("/add", name="createEditeur")
     */
    public function addAction(Request $request) {
        $editeur = new Editeur();

        $editeurManager     = $this->get('EditeurManager');
        $paysManager        = $this->get('PaysManager');
        $communeManager     = $this->get('CommuneManager');
        $lieuDitsManager    = $this->get('LieuDitsManager');
        $departementManager = $this->get('DepartementManager');
        $locationManager = $this->get('LocationManager');
        $nom                = $request->request->get("nom");

        $pays        = $paysManager->getPays($request->request->get("pays"));
        $commune     = $communeManager->getCommune($request->request->get("commune"));
        $lieuDits    = $lieuDitsManager->getLieuDits($request->request->get("lieuDits"));
        $coordonnees = new Coordonnees();
        $departement = $departementManager->getDepartement($request->request->get("departement"));

        $location = new Location();

        //Setters
        $location->setPays($pays);
        $location->setCommune($commune);
//        $location->setCoords($coordonnees);
        $location->setLieuDits($lieuDits);
        $location->setDepartement($departement);

        $locationManager->addLocation($location);

        $editeur->setLocation($location);
        $editeur->setNom($nom);

        //add
        $editeurManager->addEditeur($editeur);

        $serializer = $this->get('SerializerJSON');
        $editeurJson = $serializer->serializeJSON($editeur);

        $response = new Response($editeurJson);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
