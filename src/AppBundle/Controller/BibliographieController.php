<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AuteurBibliographie;
use AppBundle\Entity\BibliographieV2;
use AppBundle\Form\BibliographieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Scriptotek\GoogleBooks\GoogleBooks;

class BibliographieController extends Controller {
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {

        $form = $this->createForm(BibliographieType::class);
        $form->handleRequest($request);
//        /*require_once('vendor/autoload.php');*/
//        $books = new GoogleBooks(['key' => 'AIzaSyDdyWQg4UFB9kNBWVakw60daORsokZn0p0']);
//
//        foreach ($books->volumes->search('Le Grand Livre du Bois') as $vol) {
//            echo $vol->title . "\n";
//        }

        $bibliographie = $this->get("BibliographieV1Manager")->getBibliographieToConfirm();
        return $this->render('default/list.html.twig', array('form' => $form->createView(), 'bibliographie' => $bibliographie));
    }

    /**
     *
     * @Route("bibliographie/add", name="addBibliographie")
     */
    public function addAction(Request $request) {
        $bibliographie = new BibliographieV2();

        $data = $request->request;

        $bibliographie->setIdBibliographie(intval($data->get("idBibliographie")));
        $bibliographie->setTitreRef($data->get("titre"));
        $bibliographie->setAbvSiteMarchande($data->get("abvSiteMarchand"));
        $bibliographie->setTome($data->get("tome"));
        $bibliographie->setVolume($data->get("volume"));
        $bibliographie->setNumCollection($data->get("numCollection"));
        $bibliographie->setPagination($data->get("pagination"));
        $bibliographie->setIssn($data->get("ISSN"));
        $bibliographie->setIsbn($data->get("ISBN"));
        $bibliographie->setConfirmed(1);
        $bibliographie->setDateEdition($data->get("dateEdition"));

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

        $serializer        = $this->get('SerializerJSON');
        $this->get("BibliographieV1Manager")->setConfirmed(intval($data->get("idBibliographie")));

        $bibliographieManager = $this->get("BibliographieManager");
        $bibliographieManager->addBibliographie($bibliographie);

        $bibliographieJson = $serializer->serializeJSON($bibliographie);

        $personneManager = $this->get("PersonneManager");
        $auteurBibliographieManager = $this->get("AuteurBibliographieManager");

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