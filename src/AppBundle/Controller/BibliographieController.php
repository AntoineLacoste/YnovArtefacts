<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AuteurBibliographie;
use AppBundle\Entity\BibliographieV2;
use AppBundle\Form\BibliographieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BibliographieController extends Controller {
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {

        $form = $this->createForm(BibliographieType::class);
        $form->handleRequest($request);

        return $this->render('default/list.html.twig', array('form' => $form->createView()));
    }

    /**
     *
     * @Route("bibliographie/add", name="addBibliographie")
     */
    public function addAction(Request $request) {
        $bibliographie = new BibliographieV2();

        $data = $request->request;

        $bibliographie->setTitreRef($data->get("titre"));
        $bibliographie->setAbvSiteMarchande($data->get("abvSiteMarchand"));
        $bibliographie->setTome($data->get("tome"));
        $bibliographie->setVolume($data->get("volume"));
        $bibliographie->setNumCollection($data->get("numCollection"));
        $bibliographie->setPagination($data->get("pagination"));
        $bibliographie->setIssn($data->get("ISSN"));
        $bibliographie->setIsbn($data->get("ISBN"));
        $bibliographie->setConfirmed(1);

        $date = new \DateTime($data->get("dateEdition"));
        $bibliographie->setDateEdition($date);

        $typeBibManager = $this->get("TypeBibManager");
        $typeBib        = $typeBibManager->getTypeBib($data->get("typeBib"));

        $bibliographie->setTypeBib($typeBib);

        $villeManager = $this->get("VilleManager");
        $villeEdition = $villeManager->getVille($data->get("villeEdition"));

        $bibliographie->setVilleEdition($villeEdition);

        if ($data->get("collection")) {
            $collectionManager = $this->get("CollectionManager");

            $collection = $collectionManager->getCollection($data->get("collection"));
            $bibliographie->setCollection($collection);
        }

        if ($data->get("editeur")) {
            $editeurManager = $this->get("EditeurManager");

            $editeur = $editeurManager->getEditeur($data->get("editeur"));
            $bibliographie->setEditeur($editeur);
        }

        if ($data->get("periodique")) {
            $periodiqueManager = $this->get("PeriodiqueManager");

            $periodique = $periodiqueManager->getPeriodique($data->get("periodique"));
            $bibliographie->setPeriodique($periodique);
        }

        $bibliographieManager = $this->get("BibliographieManager");
        $bibliographieManager->addBibliographie($bibliographie);
 
        $serializer        = $this->get('SerializerJSON');
        $bibliographieJson = $serializer->serializeJSON($bibliographie);

        $personneManager = $this->get("PersonneManager");
        $auteurBibliographieManager = $this->get("AuteurBibliographieManager");

        $logger = $this->get("logger");
        $logger->info(gettype($data->get("auteurs")));
        foreach ($data->get("auteurs") as $auteur){
            $auteurBibliographie = new AuteurBibliographie();
            $auteurEntity = $personneManager->getPersonne($auteur);

            $auteurBibliographie->setBibliographie($bibliographie);
            $auteurBibliographie->setAuteur($auteurEntity);

            $auteurBibliographieManager->addAuteurBibliographie($auteurBibliographie);
        }

        $response = new Response($bibliographieJson);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}