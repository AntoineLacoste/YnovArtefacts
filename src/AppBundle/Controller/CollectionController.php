<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Collection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/collection")
 */
class CollectionController extends Controller
{
    /**
     * @Route("/", name="collection")
     */
    public function indexAction(Request $request)
    {
        $collection = new Collection();
        $CollectionManager = $this->get('CollectionManager');

        //GET Datas
        $data = $request->request->get("nom");

        //Setters
        $collection->setNom($data);

        //add
        $CollectionManager->addCollection($collection);

        //renvoie "return json"
        // replace this example code with whatever you need
        return $this->render('default/collection.html.twig');
    }
}
