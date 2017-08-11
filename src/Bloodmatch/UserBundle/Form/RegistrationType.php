<?php

namespace Bloodmatch\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
                ->add('bloodtype', ChoiceType::class, [
                        'choices'  => [
                            'A' => 'A',
                            'B' => 'B',
                            'AB' => 'AB',
                            'O' => 'O'
                        ]   
                    ]
                    
                );
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}