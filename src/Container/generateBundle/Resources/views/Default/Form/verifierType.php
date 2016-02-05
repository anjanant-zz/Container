<?php

namespace TC\GenerateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class verifierType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('remarque')
            ->add('temperature')
            ->add('horsgabarit')
            ->add('personnel', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\personnel",
                    "property" => "nompersonnel"
                ))
            ->add('descriptiondesavaries', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\descriptiondesavaries",
                    "property" => "signe"
                ))
            
            ->add('container', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\container",
                    "property" => "numerotc"
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TC\GenerateBundle\Entity\verifier'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tc_generatebundle_verifier';
    }
}
