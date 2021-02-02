<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
//use App\templates\assets ;
use App\Entity\Etudiant;
use App\Entity\Horaire;
use App\Entity\Stage;
use App\Entity\Date;
use App\Form\DateStageType;
use App\Form\HoraireType;
use App\Form\StageType;
class EtudiantController extends AbstractController
{
    
    public function index()
    {
     	/* Cette simple instruction permet d'envoyer des informations au navigateur sans passer par une vue.
        return new Response('<html><body>Salut Les SIO</body></html>');
        */
 
         // initialise une variable qui sera exploitée dans la vue
         
         return $this->render('accueil.html.twig');				         
    }

        public function listerEtudiant(){
        $repository = $this->getDoctrine()->getRepository(Etudiant::class);
        $etudiants = $repository->findAll();
        return $this->render('etudiant/lister.html.twig', [
                'pEtudiants' => $etudiants,]);	
    
      }
      public function ajouterHoraire(Request $request){
        $horaire = new horaire();
    $form = $this->createForm(HoraireType::class, $horaire);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

            $horaire = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($horaire);
            $entityManager->flush();

        return $this->redirectToRoute('route_accueil');
    }

    return $this->render('etudiant/ajoutHoraire.html.twig', [
        'form' => $form->createView(),
    ]);
    }


    public function ajouterDate(Request $request){
      $date = new date();
    $form = $this->createForm(DateStageType::class, $date);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

          $date = $form->getData();

          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->persist($date);
          $entityManager->flush();

      return $this->redirectToRoute('route_accueil');
    }

    return $this->render('etudiant/ajoutDate.html.twig', [
      'form' => $form->createView(),
    ]);
    }

    public function ajouterStage(Request $request){
      $stage = new stage();
    $form = $this->createForm(StageType::class, $stage);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

          $stage = $form->getData();

          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->persist($stage);
          $entityManager->flush();

      return $this->redirectToRoute('route_accueil');
    }

    return $this->render('etudiant/ajoutStage.html.twig', [
      'form' => $form->createView(),
    ]);
    }

}
