<?php

namespace App\Form;

use App\Document\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstname', TextType::class, [
            'label' => 'Vorname',
        ]);
        $builder->add('lastname', TextType::class, [
            'label' => 'Nachname',
        ]);
        $builder->add('street', TextType::class, [
            'label' => 'Strasse',
        ]);
        $builder->add('houseNumber', TextType::class, [
            'label' => 'Hausnummer',
        ]);
        $builder->add('zip', TextType::class, [
            'label' => 'Postleitzahl',
        ]);
        $builder->add('city', TextType::class, [
            'label' => 'Ort',
        ]);
        $builder->add('birthday', DateType::class, [
            'label' => 'Geburtsdatum',
        ]);
        $builder->add('email', EmailType::class, [
            'label' => 'E-Mail Adresse',
        ]);
        $builder->add('phone', TextType::class, [
            'label' => 'Telefonnummer',
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}
