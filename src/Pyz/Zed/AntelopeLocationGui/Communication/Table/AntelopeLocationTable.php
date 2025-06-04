<?php

namespace Pyz\Zed\AntelopeLocationGui\Communication\Form;

use Generated\Shared\Transfer\AntelopeLocationTransfer;
use Spryker\Zed\Kernel\Communication\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class AntelopeLocationCreateForm extends AbstractType
{
    public const FIELD_NAME = 'name';

    public function getBlockPrefix(): string
    {
        return 'antelope_location';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(static::FIELD_NAME, TextType::class, [
            'label' => 'Location Name',
            'constraints' => [
                new NotBlank(),
            ],
        ]);
    }
}
