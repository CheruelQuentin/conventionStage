<?php

namespace App\Form;

use App\Entity\Date;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class DateStageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('debut',DateType::class, array('input' => 'datetime',
                                            'widget' => 'single_text',
                                            'required' => true,
                                            'label' =>'date de debut',
                                            'placeholder' => 'jj/mm/aaaa'))
            
            ->add('fin',DateType::class, array('input' => 'datetime',
                                            'widget' => 'single_text',
                                            'required' => true,
                                            'label' =>'date de fin',
                                            'placeholder' => 'jj/mm/aaaa'))
            ->add('nbSemaine',IntegerType::class)
            ->add('ajouter', SubmitType::class, array('label' => 'Ajouter'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Date::class,
        ]);
    }
}
