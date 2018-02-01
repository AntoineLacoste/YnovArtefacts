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
/**
 * @Route("/editeur")
 */
class EditeurController extends Controller
{
    /**
     * @Route("/add", name="createEditeur")
     */
    public function addAction(Request $request) {
        $editeur = new Editeur();


        $EditeurManager = $this->get('EditeurManager');
        $PaysManager = $this->get('PaysManager');
        $CommuneManager = $this->get('CommuneManager');
        $LieuDitsManager = $this->get('LieuDitsManager');
        $CoordonneesManager = $this->get('CoordonneesManager');
        $DepartementManager = $this->get('DepartementManager');

        //Decode json
        $params = array();
        $content = $this->get("request")->getContent();
        if (!empty($content))
        {
            $params = json_decode($content, true); // 2nd param to get as array
        }

        //GET Datas
        $nom = $params["nom"];

        $locations = $params["location"];

        $pays = $locations["pays"];
        $commune = $locations["commune"];
        $lieuDits = $locations["lieuDits"];
        $coordonnees = $locations["coordonnees"];
        $department = $locations["department"];

        $location = new Location();

        //PAYS
        if(isset($pays["id"]))
        {
            $entityPays =  $PaysManager->getPays($pays["id"]);
        }
        else{
            $entityPays = new Pays();
            $entityPays->setCodePays($pays["codePays"]);
            $entityPays->setPaysDe($pays["paysDe"]);
            $entityPays->setPaysEs($pays["paysEs"]);
            $entityPays->setPaysFr($pays["paysFr"]);
            $entityPays->setPaysGb($pays["paysGb"]);
            $entityPays->setPaysIt($pays["paysIt"]);

            $PaysManager->addPays($entityPays);
        }



        //COMMUNE
        if(isset($commune["id"]))
        {
            $entityCommune =  $CommuneManager->getCommune($commune["id"]);
        }
        else{
            $entityCommune = new Commune();
            $entityCommune->setCodePays($commune["nom"]);
            $PaysManager->addPays($entityCommune);
        }



        //LIEUDITS
        if(isset($lieudits["id"]))
        {
            $entityLieuDits =  $lieuDits->getCommune($lieuDits["id"]);
        }
        else{
            $entityLieuDits = new LieuDits();
            $entityLieuDits->setCodePays($lieuDits["nom"]);
            $LieuDitsManager->addLieuDits($entityLieuDits);
        }




        //COORDONNES
        if(isset($pays["id"]))
        {
            $entityCoordonnees =  $CoordonneesManager->getCoordonnees($coordonnees["id"]);
        }
        else{
            $entityCoordonnees = new Coordonnees();
            $entityCoordonnees->setCodePays($coordonnees["lon"]);
            $entityCoordonnees->setPaysDe($coordonnees["lat"]);
            $entityCoordonnees->setPaysEs($coordonnees["typeCoord"]);
            $CoordonneesManager->addCoordonnees($entityCoordonnees);
        }

        //DEPARTEMENT
        if(isset($department["id"]))
        {
            $entityDepartement =  $DepartementManager->getDepartement($department["id"]);
        }
        else{
            $entityDepartement = new Departement();
            $entityDepartement->setCodePays($department["nom"]);
            $DepartementManager->addDepartement($entityDepartement);
        }

        //Setters
        $location->setPays($entityPays);
        $location->setCommune($entityCommune);
        $location->getCoords($entityCoordonnees);
        $location->getLieuDits($entityLieuDits);
        $location->getDepartement($entityCoordonnees);
        $editeur->setLocation($location);
        $editeur->setNom($nom);



        //add
        $EditeurManager->addEditeur($editeur);

        return $this->json(array('editeur'=>$editeur));
    }
}
