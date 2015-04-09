<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyPlanetController extends Controller
{

    /**
     * @Route("/planet.html", name="planet")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Planet')->findAll();

        return $this->render(
            'default/planet.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
