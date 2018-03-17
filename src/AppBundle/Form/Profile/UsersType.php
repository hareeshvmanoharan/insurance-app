<?php

namespace AppBundle\Form\Profile;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name',null, array ('required' => true))
            ->add('email',null, array ('required' => true))
            ->add('phone',null, array ('required' => true))
            ->add('dob',null, array ('label' => 'Date of birth', 'required' => true, 'years' => range(date('Y'), date('1910'))));


    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Profile\Users'
        ));
    }


}
