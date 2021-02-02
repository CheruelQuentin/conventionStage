<?php

namespace App\Form;

use App\Entity\Stage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Horaire;
use App\Entity\Tuteur;
use App\Entity\Date;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class StageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle',TextType::class)
            ->add('horaire',EntityType::class,[
                // looks for choices from this entity
                'class' => Horaire::class,
                'choice_label' => 'id',])
            ->add('tuteur',EntityType::class,[
                // looks for choices from this entity
                'class' => Tuteur::class,
                'choice_label' => 'nom',])
            ->add('date',EntityType::class,[
                // looks for choices from this entity
                'class' => Date::class,
                'choice_label' => 'id',])
            //->add('etudiant')
            ->add('ajouter', SubmitType::class, array('label' => 'Ajouter'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Stage::class,
        ]);
    }
}
