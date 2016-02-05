<?php

namespace TC\GenerateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class depotType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle')
            ->add("agence" , "entity", array(
                    "class" => "TC\GenerateBundle\Entity\agence",
                    "property" => "nomagence"
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TC\GenerateBundle\Entity\depot'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tc_generatebundle_depot';
    }
}
