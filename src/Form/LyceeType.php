<?php

namespace App\Form;
use App\Entity\Assurance;
use App\Entity\Lycee;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class LyceeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class)
            ->add('adresse',TextType::class)
            ->add('rue',TextType::class)
            ->add('codePostal',IntegerType::class)
            ->add('tel',IntegerType::class)
            ->add('mail', EmailType::class)
            ->add('proviseurNom',TextType::class)
            ->add('proviseurPrenom',TextType::class)
            ->add('proviseurMail', EmailType::class)
            ->add('assurance',EntityType::class,[
                'class' => Assurance::class,
                'choice_label' => 'nom',
            ])
       
        ->add('ajouter', SubmitType::class, array('label' => 'Ajouter'))
     ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Lycee::class,
        ]);
    }
}
