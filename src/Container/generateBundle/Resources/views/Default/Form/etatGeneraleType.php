<?php

namespace TC\GenerateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class etatGeneraleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                
            ->add('transporterrecevoir', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Transporterrecevoir",
                    "property" => "daterecu"
                ))
                       
            ->add('entree', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Entree",
                    "property" => "quantiteentree"
                ))
             ->add('transporterrecevoir', "entity", array(
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
            ->add('categorie', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\categorie",
                    "property" => "type"
                ))
            ->add('navire', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Navire",
                    "property" => "nom"
                ))
            ->add('importer', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\importer",
                    "property" => "dateimporter"
                ))
            ->add('sortir', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\sortir",
                    "property" => "datesortie"
                ))
             ->add('sortir', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\sortir",
                    "property" => "quantitesortie"
                )) 
            
            ->add('transporterretirer', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Transporterretirer",
                    "property" => "numeroretrait"
                ))
            ->add('client', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\client",
                    "property" => "nomclient"
                ))
            ->add('stocker', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\stocker",
                    "property" => "tcstocker"
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TC\GenerateBundle\Entity\etatGenerale'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tc_generatebundle_etatgenerale';
    }
}
