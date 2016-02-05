<?php

namespace TC\GenerateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class containerType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numerotc')
                ->add('numeroplombtc')
                ->add('codeiso')
                ->add('situation')
                ->add('nomtc') 
                ->add('etat', 'choice', array('choices' => array(null => '--veuillez selectionner--',
                        'Plein' => 'Plein',
                        'Vide' => 'Vide'
                    ), 'attr' => array('class' => 'input')))
                ->add('categorie', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\categorie",
                    "property" => "type"
                ))
                ->add('depot', "entity", array(
                    "class" => "TC\GenerateBundle\Entity\depot",
                    "property" => "libelle"
                ))
                
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TC\GenerateBundle\Entity\container'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tc_generatebundle_container';
    }
}
