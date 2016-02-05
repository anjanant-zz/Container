<?php

namespace TC\GenerateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class transporteurType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomtransporteur')
            ->add('adressetransporteur')
            ->add('email')
            ->add('teltransporteur')
            ->add("categorieTransporteur",'choice',array('choices'=>array(null=>'--veuillez selectionner--',
                                                'Externe'=>'Externe',
                                                'Interne'=>'Interne'
                                               ), 'attr' => array('class'=>'input')))
            ->add("chauffeur", "entity", array(
                    "class" => "TC\GenerateBundle\Entity\chauffeur",
                    "property" => "nomchauffeur"
                ))
            ->add("vehicule", "entity", array(
                    "class" => "TC\GenerateBundle\Entity\Vehicule",
                    "property" => "nomvehicule"
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TC\GenerateBundle\Entity\transporteur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tc_generatebundle_transporteur';
    }
}
