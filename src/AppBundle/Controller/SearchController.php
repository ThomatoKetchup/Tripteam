<?php

namespace AppBundle\Controller;


use AppBundle\Repository\GroupeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class SearchController extends Controller
{
    /**
     * @Route("/search", name="groupe_search")
     */
    public function searchAction(Request $request)
    {
        $form = $this->createForm('AppBundle\Form\SearchType');
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $groupes = $em->getRepository('AppBundle:Groupe')->findAll();

        $searchResult=0;

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $searchResult = $em->getRepository('AppBundle:Groupe')->searchGroup($data);
        }

        return $this->render('search/search.html.twig', array(
            'form' => $form->createView(),
            'searchResult' => $searchResult,
            'groupes' => $groupes));
    }
}