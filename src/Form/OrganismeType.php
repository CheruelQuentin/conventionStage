<?php

namespace App\Form;

use App\Entity\Organisme;
use App\Entity\Assurance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class OrganismeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class)
            ->add('siret',IntegerType::class)
            ->add('ape',TextType::class)
            ->add('adresse',TextType::class)
            ->add('ville',TextType::class)
            ->add('codePostal',TextType::class)
            ->add('nomRepresentant',TextType::class)
            ->add('prenomRepresentant',TextType::class)
            ->add('qualiteRepresentant',TextType::class)
            ->add('service',TextType::class)
            ->add('tel',IntegerType::class)
            ->add('fax',TextType::class)
            ->add('mail', EmailType::class)
            ->add('siegeSocial',TextType::class)
            ->add('nomAssurance', TextType::class)
            ->add('numeroContrat',IntegerType::class)
       
        ->add('ajouter', SubmitType::class, array('label' => 'Ajouter'))
     ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Organisme::class,
        ]);
    }
}
