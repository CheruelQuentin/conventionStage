<?php

namespace App\Controller;
use App\Entity\Assurance;
use App\Entity\Lycee;
use App\Entity\Organisme;
use App\Form\AjoutAssuranceType;
use App\Form\LyceeType;
use App\Form\OrganismeType;
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
    



}
