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
    public function indexAction(Request $request)
    {
        //$em = $this->getDoctrine()->getManager();
        //$bibliogrpahie = new BibliographieV2();
        $form = $this->createForm(BibliographieType::class);


        if ($form->isValid()) {
            $charge = $form->getData();

           // $chargeManager->updateCharge($charge);

            return $this->redirectToRoute('homepage');
        }

        return $this->render('default/list.html.twig', array('form' => $form->createView()));
    }
}