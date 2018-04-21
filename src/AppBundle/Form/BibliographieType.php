<?php

namespace AppBundle\Form;

use AppBundle\Entity\BibliographieV2;
use AppBundle\Entity\Collection;
use AppBundle\Entity\Commune;
use AppBundle\Entity\Departement;
use AppBundle\Entity\Editeur;
use AppBundle\Entity\LieuDits;
use AppBundle\Entity\Nationalite;
use AppBundle\Entity\Organisme;
use AppBundle\Entity\Pays;
use AppBundle\Entity\Periodique;
use AppBundle\Entity\Personne;
use AppBundle\Entity\TypeBib;
use AppBundle\Entity\TypeOrganisme;
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
                    'class' => 'form-control selectpicker'),
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
            ->add('bibliographieParent', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control selectpicker',
                    'data-live-search' => "true",
                    'label' => "Document parent : ",
                    'id' => 'editeur'),
                'placeholder' => "Choisissez un document parent",
                'class' => BibliographieV2::class,
                'choice_label' => function ($biblioParent) {
                    return $biblioParent->getTitreRef();
                }))
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
                    'class' => 'form-control selectpicker'),
                'class' => Ville::class,
                'placeholder' => "Choisissez une ville",
                'choice_label' => function ($ville) {
                    return $ville->getNom();
                }))
            ->add('editeur', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control selectpicker',
                    'id' => 'editeur'),
                'placeholder' => "Choisissez un éditeur",
                'class' => Editeur::class,
                'choice_label' => function ($editeur) {
                    return $editeur->getNom();
                }))
            ->add('paysEditeur', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control selectpicker',
                    'id' => 'paysEditeur'),
                'class' => Pays::class,
                'placeholder' => "Choisissez un pays",
                'choice_label' => function ($pays) {
                    return $pays->getPaysFr();
                }))
            ->add('villeEditeur', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control selectpicker',
                    'id' => 'villeEditeur'),
                'class' => Ville::class,
                'placeholder' => "Choisissez une ville",
                'choice_label' => function ($ville) {
                    return $ville->getNom();
                }))
            ->add('departementEditeur', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control selectpicker',
                    'id' => 'departementEditeur'),
                'class' => Departement::class,
                'placeholder' => "Choisissez un departement",
                'choice_label' => function ($departement) {
                    return $departement->getNom();
                }))
            ->add('communeEditeur', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control selectpicker',
                    'id' => 'communeEditeur'),
                'class' => Commune::class,
                'placeholder' => "Choisissez une commune",
                'choice_label' => function ($commune) {
                    return $commune->getNom();
                }))
            ->add('lieuDitsEditeur', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control selectpicker',
                    'id' => 'lieuDitsEditeur'),
                'class' => LieuDits::class,
                'placeholder' => "Choisissez un leiu-dit",
                'choice_label' => function ($lieuDits) {
                    return $lieuDits->getNom();
                }))
            ->add('collection', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control selectpicker'),
                'class' => Collection::class,
                'placeholder' => "Choisissez une collection",
                'choice_label' => function ($collection) {
                    return $collection->getNom();
                }))
            ->add('num_collection', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control'),
                'label' => "Numéro dans la collection : "
            ))
            ->add('periodique', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control selectpicker'),
                'class' => Periodique::class,
                'placeholder' => "Choisissez un périodique",
                'choice_label' => function ($periodique) {
                    return $periodique->getNom();
                }))
            ->add('auteur', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control selectpicker'),
                'class' => Personne::class,
                'placeholder' => "Choisissez un auteur",
                'choice_label' => function ($personne) {
                    return $personne->getNom() . " " . $personne->getPrenom() . " (" . $personne->getNationalite()->getAbv() . ")";
                }))
            ->add('directeur', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control selectpicker'),
                'class' => Personne::class,
                'placeholder' => "Choisissez un directeur",
                'choice_label' => function ($personne) {
                    return $personne->getNom() . " " . $personne->getPrenom() . " (" . $personne->getNationalite()->getAbv() . ")";
                }))
            ->add('nationalite', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control selectpicker'),
                'class' => Nationalite::class,
                'placeholder' => "Choisissez une nationalité",
                'choice_label' => function ($nationalite) {
                    return $nationalite->getNom() . " (" . $nationalite->getAbv() . ")";
                }))
            ->add('organisme', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control selectpicker'),
                'class' => Organisme::class,
                'placeholder' => "Choisissez un organisme",
                'choice_label' => function ($organisme) {
                    $organismeStr = $organisme->getNom();
                    if ($organisme->getTypeOrganisme()) {
                        $organismeStr .= " (" . $organisme->getTypeOrganisme()->getDescription() . ")";
                    }
                    return $organismeStr;
                }))
            ->add('typeOrganisme', EntityType::class, array(
                'attr' => array(
                    'class' => 'form-control selectpicker'),
                'placeholder' => "Choisissez un type d'organisme",
                'class' => TypeOrganisme::class,
                'choice_label' => function ($typeOrganisme) {
                    return $typeOrganisme->getDescription();
                }));
    }

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
