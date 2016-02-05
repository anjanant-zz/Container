<?php

namespace TC\GenerateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class recevoirType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('validation')
            ->add("transitaire", "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Transitaire",
                    "property" => "nomtransitaire"
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
            'data_class' => 'TC\GenerateBundle\Entity\recevoir'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tc_generatebundle_recevoir';
    }
}
