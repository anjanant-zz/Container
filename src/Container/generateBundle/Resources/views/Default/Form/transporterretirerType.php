<?php

namespace TC\GenerateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class transporterretirerType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeroretrait')
            ->add('dateretrait')
            ->add('container', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\container",
                    "property" => "numerotc"
                ))
            ->add('transporteur', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Transporteur",
                    "property" => "nomtransporteur"
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TC\GenerateBundle\Entity\transporterretirer'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tc_generatebundle_transporterretirer';
    }
}
