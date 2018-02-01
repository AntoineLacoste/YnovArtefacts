<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ville;
use AppBundle\Form\VilleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/ville")
 */
class VilleController extends Controller
{
    /**
     * @Route("/add", name="createVille")
     */
    public function addAction(Request $request) {
        $ville = new Ville();
        $VilleManager = $this->get('VilleManager');

        //GET Datas
        $data = $request->request->get("nom");

        //Setters
        $ville->setNom($data);

        //add
        $VilleManager->addVille($ville);

        return $this->json(array('ville'=>$ville));
    }
}
