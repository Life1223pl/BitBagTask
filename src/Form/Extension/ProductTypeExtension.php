<?php

declare(strict_types=1);

namespace App\Form\Extension;

use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('color', ChoiceType::class, [
            'label' => 'app.color',
            'choices' => [
                'app.colors.none' => 'none',
                'app.colors.red' => 'red',
                'app.colors.blue' => 'blue',
                'app.colors.green' => 'green',
            ],
        ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
