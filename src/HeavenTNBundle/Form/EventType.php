<?php

namespace HeavenTNBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class EventType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')
            ->add('description')
            ->add('address')
            ->add('startdate')
            ->add('enddate')
            ->add('NbrParticipant')
            ->add('NbrDesPlaces')
            ->add('eventavatar', FileType::class, array('attr' => array('class' => 'form-control'),'data_class' => null))


        ;
    }
    /**
    * {@inheritdoc}
    */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HeavenTNBundle\Entity\Event'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'heaventnbundle_event';
    }


}
