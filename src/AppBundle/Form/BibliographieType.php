<?php

namespace AppBundle\Form;

use AppBundle\Entity\Collection;
use AppBundle\Entity\Editeur;
use AppBundle\Entity\Periodique;
use AppBundle\Entity\TypeBib;
use AppBundle\Entity\Ville;

use function Sodium\add;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BibliographieType extends AbstractType {
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('TypeBib', EntityType::class, array(
                'class' => TypeBib::class,
                'choice_label' => function ($typeBib) {
                    return $typeBib->getType();
                }))
            /* Titre ref */
            ->add('titreRef', TextType::class)
            ->add('abvSiteMarchande', TextType::class)
            ->add('tome', TextType::class)
            ->add('volume', TextType::class)
            ->add('pagination', TextType::class)
            ->add('dateEdition', DateType::class)
            ->add('isbn', TextType::class)
            ->add('issn', TextType::class)

            ->add('villeEdition', EntityType::class, array(
                'class' => Ville::class,
                'choice_label' => function ($ville) {
                    return $ville->getNom();
                }))

            ->add('editeur', EntityType::class, array(
                'class' => Editeur::class,
                'choice_label' => function ($editeur) {
                    return $editeur->getNom();
                }))
            ->add('collection', EntityType::class, array(
                'class' => Collection::class,
                'choice_label' => function ($collection) {
                    return $collection->getNom();
                }))
            ->add('periodique', EntityType::class, array(
                'class' => Periodique::class,
                'choice_label' => function ($periodique) {
                    return $periodique->getNom();
                }))
            ;
    }
    /*->add('survey', CollectionType::class, array(
        'entry_type' => SurveyType::class,
        'allow_add' => true
    ))*/
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\BibliographieV2'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'appbundle_collection';
    }


}
