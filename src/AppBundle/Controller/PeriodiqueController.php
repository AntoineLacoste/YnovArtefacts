<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Periodique;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/periodique")
 */
class PeriodiqueController extends Controller
{
    /**
     * @Route("/add", name="createPeriodique")
     */
    public function addAction(Request $request) {
        $periodique = new Periodique();
        $PeriodiqueManager = $this->get('PeriodiqueManager');

        //GET Datas
        $data = $request->request->get("nom");

        //Setters
        $periodique->setNom($data);

        //add
        $PeriodiqueManager->addPeriodique($periodique);

        return $this->json(array('periodique'=>$periodique));
    }
}
