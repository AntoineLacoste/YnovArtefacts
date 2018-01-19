<?php

namespace AppBundle\Form;

use AppBundle\Entity\Nationalite;
use AppBundle\Entity\Organisme;
use AppBundle\Entity\Personne;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonneType extends AbstractType {
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('dateVie')
            ->add('note')
            ->add('Nationalite', EntityType::class, array(
                'class' => Nationalite::class,
                'choice_label' => function ($nationalite) {
                    return $nationalite->getNom();
                }
            ))
            ->add('Organisme', EntityType::class, array(
                'class' => Organisme::class,
                'choice_label' => function ($organisme) {
                    return $organisme->getNom();
                }
            ))
            ->add('Directeur', EntityType::class, array(
                'class' => Personne::class,
                'choice_label' => function ($personne) {
                    return $personne->getNom() . " " . $personne->getPrenom();
                }
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Personne'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'appbundle_personne';
    }


}
