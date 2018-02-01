<?php

namespace AppBundle\Form;

use AppBundle\Entity\Collection;
use AppBundle\Entity\Commune;
use AppBundle\Entity\Departement;
use AppBundle\Entity\Editeur;
use AppBundle\Entity\LieuDits;
use AppBundle\Entity\Pays;
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
                'attr' => array(
                    'class' => 'form-control'),
                'label' => "Type du document : ",
                'choice_label' => function ($typeBib) {
                    return $typeBib->getType();
                }))
            /* Titre ref */
            ->add('titreRef', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control'),
                'label' => "Titre du document : "
            ))
            ->add('abvSiteMarchande', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control'),
                'label' => "Lien site marchand : "
            ))
            ->add('tome', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control'),
                'label' => "Tome : "
            ))
            ->add('volume', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control'),
                'label' => "Volume : "
            ))
            ->add('pagination', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control'),
                'label' => "Pagination : "
            ))
            ->add('dateEdition', DateType::class, array(
                'attr' => array(
                    'class' => 'form-control'),
                'label' => "Date d'édition : "
            ))
            ->add('isbn', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control'),
                'label' => "ISBN : "
            ))
            ->add('issn', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control'),
                'label' => "ISSN : "
            ))

            ->add('villeEdition', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control'),
                'class' => Ville::class,
                'choice_label' => function ($ville) {
                    return $ville->getNom();
                }))

            ->add('editeur', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'id' => 'editeur'),
                'class' => Editeur::class,
                'choice_label' => function ($editeur) {
                    return $editeur->getNom();
                }))

            ->add('paysEditeur', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'id' => 'paysEditeur'),
                'class' => Pays::class,
                'choice_label' => function ($pays) {
                    return $pays->getPaysFr();
                }))

            ->add('villeEditeur', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'id' => 'villeEditeur'),
                'class' => Ville::class,
                'choice_label' => function ($ville) {
                    return $ville->getNom();
                }))

            ->add('departementEditeur', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'id' => 'departementEditeur'),
                'class' => Departement::class,
                'choice_label' => function ($departement) {
                    return $departement->getNom();
                }))

            ->add('communeEditeur', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'id' => 'communeEditeur'),
                'class' => Commune::class,
                'choice_label' => function ($commune) {
                    return $commune->getNom();
                }))

            ->add('lieuDitsEditeur', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'id' => 'lieuDitsEditeur'),
                'class' => LieuDits::class,
                'choice_label' => function ($lieuDits) {
                    return $lieuDits->getNom();
                }))

            ->add('collection', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control'),
                'class' => Collection::class,
                'choice_label' => function ($collection) {
                    return $collection->getNom();
                }))
            ->add('periodique', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control'),
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
