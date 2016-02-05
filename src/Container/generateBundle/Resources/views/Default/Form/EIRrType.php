<?php

namespace TC\GenerateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EIRrType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('transporterrececoir', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Transporterrececoir",
                    "property" => "numerorecu"
                ))
            ->add('transitaire', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Transitaire",
                    "property" => "nomtransitaire"
                ))
            ->add('container', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\container",
                    "property" => "numerotc"
                ))
             ->add('container', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\container",
                    "property" => "numeroplombtc"
                ))
            ->add('categorie', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\categorie",
                    "property" => "type"
                ))
            ->add('categorie', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\categorie",
                    "property" => "codetype"
                ))
            ->add('verifier', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Verifier",
                    "property" => "horsgabarit"
                ))
             ->add('verifier', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Verifier",
                    "property" => "temperature"
                ))
            ->add('navire', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Navire",
                    "property" => "nom"
                ))
            ->add('informer', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\informer",
                    "property" => "situation"
                ))
            ->add('vehicule', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Vehicule",
                    "property" => "cartegrissevehicule"
                ))
            ->add('portecontainer', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\portecontainer",
                    "property" => "cartegrisse"
                ))
            ->add('descriptiondesavaries', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Descriptiondesavaries",
                    "property" => "signe"
                ))
             ->add('descriptiondesavaries', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Descriptiondesavaries",
                    "property" => "nomenclature"
                ))
             ->add('descriptiondesavaries', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Descriptiondesavaries",
                    "property" => "description"
                ))
                
                                 
            ->add('transporteur', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Transporteur",
                    "property" => "nomtransporteur"
                ))
            ->add('etat', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\etat",
                    "property" => "libelleetat"
                ))
            ->add('company', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\company",
                    "property" => "nomcompany"
                ))
            ->add('voyage', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Voyage",
                    "property" => "numerovoyage"
                ))
            
                
            ->add('vehicule', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Vehicule",
                    "property" => "immatvehicule"
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TC\GenerateBundle\Entity\EIRr'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tc_generatebundle_eirr';
    }
}
