<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Organisme;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
/**
 * @Route("/organisme")
 */
class OrganismeController extends Controller
{
    /**
     * @Route("/", name="organisme")
     */
    public function indexAction(Request $request)
    {
        $organisme = new Organisme();
        $OrganismeManager = $this->get('OrganismeManager');

        //GET Datas
        $data = $request->request->get("nom");

        //Setters
        $organisme->setNom($data);

        //add
        $OrganismeManager->addVille($organisme);

        return $this->json(array('organisme'=>$organisme));
    }
}
