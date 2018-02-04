<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Commune;
use AppBundle\Entity\Coordonnees;
use AppBundle\Entity\Departement;
use AppBundle\Entity\Editeur;
use AppBundle\Entity\LieuDits;
use AppBundle\Entity\Location;
use AppBundle\Entity\Pays;
use AppBundle\Entity\Personne;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/personne")
 */
class PersonneController extends Controller {
    /**
     * @Route("/add", name="createPersonne")
     */
    public function addAction(Request $request) {
        $data = $request->request;

        $nationaliteManager = $this->get('NationaliteManager');
        $organismeManager   = $this->get('OrganismeManager');
        $personneManager    = $this->get('PersonneManager');

        $nom         = $data->get("nom");
        $prenom      = $data->get("prenom");
        $dateVie     = $data->get("dateVie");
        $note        = $data->get("note");
        $nationalite = $nationaliteManager->getNationalite($data->get("nationalite"));
        $organisme   = $organismeManager->getOrganisme($data->get("organisme"));
        $directeur   = $personneManager->getPersonne($data->get("directeur"));

        $personne = new Personne();

        //Setters
        $personne->setNom($nom);
        $personne->setDateVie($dateVie);
        $personne->setPrenom($prenom);
        $personne->setNote($note);
        $personne->setDirecteur($directeur);
        $personne->setNationalite($nationalite);
        $personne->setOrganisme($organisme);

        //add
        $personneManager->addPersonne($personne);

        $serializer   = $this->get('SerializerJSON');
        $personneJson = $serializer->serializeJSON($personne);
//        $personneJson = $serializer->serializeJSON([$personne->getIdPersonne(), $personne->getNom(), $personne->getPrenom()]);

        $response = new Response($personneJson);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
