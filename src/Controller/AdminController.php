<?php

namespace App\Controller;
use App\Entity\Lycee;
use App\Entity\Organisme;
use App\Entity\Tuteur;
use App\Entity\Section;
use App\Form\LyceeType;
use App\Form\SectionType;
use App\Form\OrganismeType;
use App\Form\TuteurType;
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


public function ajouterOrganisme(Request $request){
    $organisme = new organisme();
$form = $this->createForm(OrganismeType::class, $organisme);
$form->handleRequest($request);

if ($form->isSubmitted() && $form->isValid()) {

        $lycee = $form->getData();

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($organisme);
        $entityManager->flush();

    return $this->redirectToRoute('route_accueil');
}

return $this->render('admin/ajoutOrganisme.html.twig', [
    'form' => $form->createView(),
]);
}
    
public function ajouterSection(Request $request){
    $section = new section();
$form = $this->createForm(SectionType::class, $section);
$form->handleRequest($request);

if ($form->isSubmitted() && $form->isValid()) {

        $lycee = $form->getData();

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($section);
        $entityManager->flush();

    return $this->redirectToRoute('route_accueil');
}

return $this->render('admin/ajoutSection.html.twig', [
    'form' => $form->createView(),
]);
}

public function ajouterTuteur(Request $request){
    $tuteur = new tuteur();
$form = $this->createForm(TuteurType::class, $tuteur);
$form->handleRequest($request);

if ($form->isSubmitted() && $form->isValid()) {

        $tuteur = $form->getData();

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($tuteur);
        $entityManager->flush();

    return $this->redirectToRoute('route_accueil');
}

return $this->render('admin/ajoutTuteur.html.twig', [
    'form' => $form->createView(),
]);
}

}
