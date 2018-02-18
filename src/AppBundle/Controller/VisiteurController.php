<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Profil;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Visiteur controller.
 *
 * @Route("visiteur")
 */
class VisiteurController extends Controller
{
    /**
     * Lists all profil entities.
     *
     * @Route("/", name="visiteur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('visiteur/index.html.twig');
    }
}