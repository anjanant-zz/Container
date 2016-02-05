<?php

namespace TC\GenerateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class companyType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomcompany')
            ->add('adresse')
            ->add('email')
            ->add('tel')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TC\GenerateBundle\Entity\company'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tc_generatebundle_company';
    }
}
