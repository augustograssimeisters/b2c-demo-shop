<?php

namespace Pyz\Zed\AntelopeGui\Communication\Form;

use Generated\Shared\Transfer\AntelopeTransfer;
use Pyz\Zed\AntelopeLocation\Persistence\PyzAntelopeLocationQuery;
use Spryker\Zed\Kernel\Communication\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class AntelopeCreateForm extends AbstractType
{
    public const FIELD_NAME = 'name';
    public const FIELD_LOCATION = 'idAntelopeLocation';

    protected $antelopeLocationQuery;

    public function __construct(PyzAntelopeLocationQuery $antelopeLocationQuery)
    {
        $this->antelopeLocationQuery = $antelopeLocationQuery;
    }

    public function getBlockPrefix(): string
    {
        return 'antelope';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(static::FIELD_NAME, TextType::class, [
                'label' => 'Antelope Name',
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add(static::FIELD_LOCATION, EntityType::class, [
                'class' => \Orm\Zed\AntelopeLocation\Persistence\PyzAntelopeLocation::class,
                'choice_label' => 'name',
                'label' => 'Location',
                'placeholder' => 'Select a Location',
                'required' => true,
                'query_builder' => function () {
                    return $this->antelopeLocationQuery;
                },
            ]);
    }
}
