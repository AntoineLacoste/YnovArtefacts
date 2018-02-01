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

        $data = $request->request->get("nom");
        $collection->setNom($data);
        // replace this example code with whatever you need
        return $this->render('default/collection.html.twig');
    }
}
