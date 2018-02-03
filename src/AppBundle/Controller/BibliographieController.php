<?php

namespace AppBundle\Controller;

use AppBundle\Form\BibliographieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BibliographieController extends Controller {
    /**
     * @Route("/", name="homepage")
     */
    public function addAction(Request $request) {

        $form = $this->createForm(BibliographieType::class);
        $form->handleRequest($request);

        return $this->render('default/list.html.twig', array('form' => $form->createView()));
    }
}