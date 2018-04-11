<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 05/04/2018
 * Time: 11:55
 */


namespace App\Form\Type;

use App\Entity\PaymentType;
use App\Entity\Purpose;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditOperationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('madeOn', DateType::class,[
                'widget' => 'choice',
                'html5' => false,
                'format' => 'yyyy-MM-dd'
            ])
            ->add('amount', NumberType::class)
            ->add('comment', TextareaType::class,[
                'required' => false
            ])
            ->add('paymentType', EntityType::class,[
                'class' => PaymentType::class,
                'choice_label' => 'type'
            ])
            ->add('purpose', EntityType::class,[
                'class' => Purpose::class,
                'choice_label' => 'type'
            ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'App\Entity\Operation',
            'validation_groups' => 'add'
        ]);
    }
}
