<?php

namespace AppBundle\Controller;

use AppBundle\Entity\BibliographieV2;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $bibliographieRepo = $em->getRepository("AppBundle:BibliographieV2");
        $collectionRepo    = $em->getRepository("AppBundle:Collection");
        $diplomeRepo       = $em->getRepository("AppBundle:Diplome");
        $editeurRepo       = $em->getRepository("AppBundle:Editeur");
        $organismeRepo     = $em->getRepository("AppBundle:Organisme");
        $periodesRepo       = $em->getRepository("AppBundle:Periodes");
        $periodiqueRepo    = $em->getRepository("AppBundle:Periodique");
        $themeRepo         = $em->getRepository("AppBundle:Theme");
        $villeRepo         = $em->getRepository("AppBundle:Ville");
        $typeBibRepo       = $em->getRepository("AppBundle:TypeBib");

        $bibliographies = $bibliographieRepo->findAll();
        $collections    = $collectionRepo->findAll();
        $diplomes       = $diplomeRepo->findAll();
        $editeurs       = $editeurRepo->findAll();
        $organismes     = $organismeRepo->findAll();
        $periodes       = $periodesRepo->findAll();
        $periodiques    = $periodiqueRepo->findAll();
        $themes         = $themeRepo->findAll();
        $villes         = $villeRepo->findAll();
        $typeBibs       = $typeBibRepo->findAll();

        dump($bibliographies);
        return $this->render('default/list.html.twig', [
            'bibliographie' => $bibliographies,
            'collections' => $collections,
            'diplomes' => $diplomes,
            'editeurs' => $editeurs,
            'organismes' => $organismes,
            'periodes' => $periodes,
            'periodiques' => $periodiques,
            'themes' => $themes,
            'villes' => $villes,
            'type_bibs' => $typeBibs,
        ]);
    }
}