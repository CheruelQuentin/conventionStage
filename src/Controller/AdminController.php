<?php

namespace App\Controller;
use App\Entity\Assurance;
use App\Entity\Lycee;
use App\Form\AjoutAssuranceType;
use App\Form\LyceeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    public function ajouterAssurance(Request $request){
        $assurance = new assurance();
	$form = $this->createForm(AjoutAssuranceType::class, $assurance);
	$form->handleRequest($request);
 
	if ($form->isSubmitted() && $form->isValid()) {
 
            $assurance = $form->getData();
 
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($assurance);
            $entityManager->flush();
 
	    return $this->redirectToRoute('route_accueil');
    }

    return $this->render('admin/ajoutAssurance.html.twig', [
        'form' => $form->createView(),
    ]);
    }



    public function ajouterLycee(Request $request){
        $lycee = new lycee();
	$form = $this->createForm(LyceeType::class, $lycee);
	$form->handleRequest($request);
 
	if ($form->isSubmitted() && $form->isValid()) {
 
            $lycee = $form->getData();
 
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($lycee);
            $entityManager->flush();
 
	    return $this->redirectToRoute('route_accueil');
    }

    return $this->render('admin/ajoutLycee.html.twig', [
        'form' => $form->createView(),
    ]);
}
    



}
