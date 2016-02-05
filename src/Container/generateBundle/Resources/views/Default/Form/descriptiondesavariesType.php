<?php

namespace TC\GenerateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class descriptiondesavariesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomenclature','choice',
                         array('choices'=>array(null=>'----------veuillez selectionner------------',
                             
                                                '1.Trouè'=>'1.Trouè',
                                                '2.Dechirè'=>'2.Dechirè',
                                                '3.Tordu'=>'3.Tordu',
                                                '4.Eraflè'=>'4.Eraflè',
                                                '5.En couplage'=>'5.En couplage',
                                                '6.Rouillé'=>'6.Rouillé',
                                                '7.Manquant'=>'7.Manquant',
                                                '8.Sale'=>'8.Sale',
                                                '9.Deformè'=>'9.Deformè',
                                                '10.Enfocè' =>'10.Enfocè',
                                                '11.Bombè'=>'11.Bombè',
                                                '12.Cabossé'=>'12.Cabossé'
                                               ), 'attr' => array('class'=>'input')))
            ->add('description','choice',
                         array('choices'=>array(null=>'----------veuillez selectionner------------',
                             
                                                'A.Facade'=>'A.Facade',
                                                'B.Porte'=>'B.Porte',
                                                'C.Toiture'=>'C.Toiture',
                                                'D.Plancher'=>'D.Plancher',
                                                'E.Cotè droite'=>'E.Cotè droite',
                                                'F.Cotè gauche'=>'F.Cotè gauche',
                                                'G.Montant'=>'G.Montant',
                                                'H.Traverse'=>'H.Traverse',
                                                'I.Accessoire'=>'I.Accessoire',
                                                'J.Interieur' =>'J.Interieur',
                                                'K.Exterieur'=>'K.Exterieur',
                                                'L.general'=>'L.general'
                                               ), 'attr' => array('class'=>'input')))
            ->add('signe')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TC\GenerateBundle\Entity\descriptiondesavaries'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tc_generatebundle_descriptiondesavaries';
    }
}
