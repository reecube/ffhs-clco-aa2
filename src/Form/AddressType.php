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
    protected function builderOptions(string $label, array $options = []): array
    {
        $mergeOptions = [
            'label' => $label,
            'attr' => [
                'placeholder' => $label,
            ],
        ];

        return array_merge($options, $mergeOptions);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstname', TextType::class, $this->builderOptions('Vorname'));
        $builder->add('lastname', TextType::class, $this->builderOptions('Nachname'));
        $builder->add('street', TextType::class, $this->builderOptions('Strasse'));
        $builder->add('houseNumber', TextType::class, $this->builderOptions('Hausnummer'));
        $builder->add('zip', TextType::class, $this->builderOptions('Postleitzahl'));
        $builder->add('city', TextType::class, $this->builderOptions('Ort'));
        $builder->add('birthday', DateType::class, $this->builderOptions('Geburtsdatum', [
            'widget' => 'single_text',
        ]));
        $builder->add('email', EmailType::class, $this->builderOptions('E-Mail Adresse'));
        $builder->add('phone', TextType::class, $this->builderOptions('Telefonnummer'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}
