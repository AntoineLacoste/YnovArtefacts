<?php

namespace AppBundle\Controller;

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
        $session = new Session();
        $periodiqueManager = $this->get('PeriodiqueManager');

        $form = $this->createForm(PeriodiqueType::class);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();

            $newPeriodique = new Periodique();
            $newPeriodique->setName($data["nom"]);

            $periodiqueManager->addPeriodique($newPeriodique);

            $session->getFlashBag()->add('success', 'L\'élement a été ajouté');
            return $this->redirectToRoute('homepage');
        } else {
            if ($form->isSubmitted()) {
                $session->getFlashBag()->add('error', 'Vérifiez que l\'élément a été remplis correctement.');
            }

        }

        return $this->render('default/list.html.twig', array('form' => $form->createView()));
    }
}
