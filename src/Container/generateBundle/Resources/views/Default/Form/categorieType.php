<?php

namespace TC\GenerateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class categorieType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type','choice',array('choices'=>array(null=>'--veuillez selectionner--',
                                                '20pied'=>'20pied',
                                                '40Pied'=>'40pied'
                                               ), 'attr' => array('class'=>'input')))
            ->add('codetype','choice',array('choices'=>array(null=>'--veuillez selectionner--',
                                                'S2'=>'S2',
                                                'S4'=>'S4',
                                                'C4'=>'C4',
                                                'F2'=>'F2',
                                                'F4'=>'F4',
                                                'P2'=>'P2',
                                                'P4'=>'P4',
                                                'R2'=>'R2',
                                                'R4'=>'R4',
                                                'Z2'=>'Z2',
                                                'Z4'=>'Z4',
                                                'T2'=>'T2',
                                                'T4'=>'T4',
                                              
                                               ), 'attr' => array('class'=>'input')))
            ->add('pod')
            ->add("nature",'choice',array('choices'=>array(null=>'--veuillez selectionner--',
                                                'Simple'=>'Simple',
                                                'Frigo'=>'Frigo'
                                               ), 'attr' => array('class'=>'input')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TC\GenerateBundle\Entity\categorie'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tc_generatebundle_categorie';
    }
}
