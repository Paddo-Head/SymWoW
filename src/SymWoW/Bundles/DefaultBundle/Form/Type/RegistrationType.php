<?php

namespace Symwow\Bundles\DefaultBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('account', new AccountType());
        $builder->add(
            'terms',
            'checkbox',
            array('property_path' => 'termsAccepted')
        );

        $builder->add("Submit", "submit", array(
            "attr" => array('class' => '')
        ));
    }

    public function getName()
    {
        return 'registration';
    }
}