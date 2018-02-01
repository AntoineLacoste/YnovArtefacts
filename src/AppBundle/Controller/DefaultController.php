<?php

namespace AppBundle\Controller;

use AppBundle\Entity\BibliographieV2;
use AppBundle\Form\BibliographieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function addAction(Request $request) {
//        $session      = new Session();
//        $bibliographieManager = $this->get('BibliographieManager');

        $form = $this->createForm(BibliographieType::class);

        $form->handleRequest($request);

//        if ($form->isValid()) {
//            $data = $form->getData();
//
//            $newBibliogrpahie = new BibliographieV2();
//            $newBibliogrpahie->setTitreRef($data["titreRef"]);
//            $newBibliogrpahie->setAbvSiteMarchande($data["abvSiteMarchande"]);
//            $newBibliogrpahie->setTome($data["tome"]);
//            $newBibliogrpahie->setVolume($data["volume"]);
//            $newBibliogrpahie->setNumCollection($data["numCollection"]);
//            $newBibliogrpahie->setPagination($data["pagination"]);
//            $newBibliogrpahie->setDateEdition($data["dateEdition"]);
//            $newBibliogrpahie->setIsbn($data["isbn"]);
//            $newBibliogrpahie->setIssn($data["issn"]);
//
//            $bibliographieManager->addVille($newBibliogrpahie);
//
//            $session->getFlashBag()->add('success', 'Le sujet a été publié.');
//            return $this->redirectToRoute('homepage');
//        } else {
//            if ($form->isSubmitted()) {
//                $session->getFlashBag()->add('error', 'Vérifiez que le sujet est été remplis correctement.');
//            }
//
//        }

        return $this->render('default/list.html.twig', array('form' => $form->createView()));
    }
}