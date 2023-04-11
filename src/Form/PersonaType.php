<?php

namespace App\Form;

use App\Entity\Persona;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nombre')
            ->add('Apellido1')
            ->add('Apellido2')
            ->add('DNI')
            ->add('d_hipo')
            ->add('d_cerdo')
            ->add('celiaco')
            ->add('lactosa')
            ->add('cefalopodos')
            ->add('huevo')
            ->add('almuerzo_14')
            ->add('microondas')
            ->add('picnic')
            ->add('otras')
            ->add('otras_desc')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Persona::class,
        ]);
    }
}
