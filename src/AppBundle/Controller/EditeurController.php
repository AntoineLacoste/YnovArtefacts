<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Editeur;
use AppBundle\Entity\Location;
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

        //GET Datas
        $data = $request->request->get("nom");


        $location = new Location();
        $location->setIdCommune($request->request->get("idCommune"));

        //$d->setIdCommune();
        $data = $request->request->get("idCommune");

        //Setters
        $editeur->setNom($data);

        //add
        $EditeurManager->addEditeur($editeur);

        return $this->json(array('editeur'=>$editeur));
    }
}
