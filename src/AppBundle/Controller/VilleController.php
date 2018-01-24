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
        $session      = new Session();
        $villeManager = $this->get('VilleManager');

        $form = $this->createForm(VilleType::class);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();

            $newVille = new Ville();
            $newVille->setName($data["nom"]);

            $villeManager->addVille($newVille);

            $session->getFlashBag()->add('success', 'Le sujet a été publié.');
            return $this->redirectToRoute('homepage');
        } else {
            if ($form->isSubmitted()) {
                $session->getFlashBag()->add('error', 'Vérifiez que le sujet est été remplis correctement.');
            }

        }

        return $this->render('default/list.html.twig', array('form' => $form->createView()));
    }
}
