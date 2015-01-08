<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace kssis\UrlopBundle\Form\Type;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Form;

class PracownikEdycjaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', 'text', array(
                'label'=> 'Imię')
                 )
                
            ->add('lastName', 'text', array(
                'label'=> 'Nazwisko')
                 )
            ->add('emploeeDate', 'date', array(
                'label'=> 'Data zatrudnienia',
                'input'  => 'datetime',)
                 )
            ->add('position', 'text', array(
                'label'=> 'Stanowisko')
                 )
            ->add('leaveLimit', 'text', array(
                'label'=> 'Limit dni urlopowych')
                 )
            ->add('save', 'submit', array(
                'label' => 'Zapisz', 'attr' => array (
                    'class' => 'btn btn-lg btn-success'
                )
            ));
    }

    public function getName()
    {
        return 'formEditPracownik';
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
{
    $resolver->setDefaults(array(
        'data_class' => 'kssis\UrlopBundle\Entity\Pracownik',
    ));
}
    
}








?>