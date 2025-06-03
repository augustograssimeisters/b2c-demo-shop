<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductMeasurementSalesUnitTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_MEASUREMENT_SALES_UNIT = 'idProductMeasurementSalesUnit';

    /**
     * @var int|null
     */
    protected $idProductMeasurementSalesUnit;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_measurement_sales_unit' => 'idProductMeasurementSalesUnit',
        'idProductMeasurementSalesUnit' => 'idProductMeasurementSalesUnit',
        'IdProductMeasurementSalesUnit' => 'idProductMeasurementSalesUnit',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_MEASUREMENT_SALES_UNIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_measurement_sales_unit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module CustomerReorderWidget
     *
     * @param int|null $idProductMeasurementSalesUnit
     *
     * @return $this
     */
    public function setIdProductMeasurementSalesUnit($idProductMeasurementSalesUnit)
    {
        $this->idProductMeasurementSalesUnit = $idProductMeasurementSalesUnit;
        $this->modifiedProperties[self::ID_PRODUCT_MEASUREMENT_SALES_UNIT] = true;

        return $this;
    }

    /**
     * @module CustomerReorderWidget
     *
     * @return int|null
     */
    public function getIdProductMeasurementSalesUnit()
    {
        return $this->idProductMeasurementSalesUnit;
    }

    /**
     * @module CustomerReorderWidget
     *
     * @param int|null $idProductMeasurementSalesUnit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductMeasurementSalesUnitOrFail($idProductMeasurementSalesUnit)
    {
        if ($idProductMeasurementSalesUnit === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MEASUREMENT_SALES_UNIT);
        }

        return $this->setIdProductMeasurementSalesUnit($idProductMeasurementSalesUnit);
    }

    /**
     * @module CustomerReorderWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductMeasurementSalesUnitOrFail()
    {
        if ($this->idProductMeasurementSalesUnit === null) {
            $this->throwNullValueException(static::ID_PRODUCT_MEASUREMENT_SALES_UNIT);
        }

        return $this->idProductMeasurementSalesUnit;
    }

    /**
     * @module CustomerReorderWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductMeasurementSalesUnit()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_MEASUREMENT_SALES_UNIT);

        return $this;
    }

    /**
     * @param array<string, mixed> $data
     * @param bool $ignoreMissingProperty
     *
     * @throws \InvalidArgumentException
     *
     * @return $this
     */
    public function fromArray(array $data, $ignoreMissingProperty = false)
    {
        foreach ($data as $property => $value) {
            $normalizedPropertyName = $this->transferPropertyNameMap[$property] ?? null;

            switch ($normalizedPropertyName) {
                case 'idProductMeasurementSalesUnit':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
            }
        }

        return $this;
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function modifiedToArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayRecursiveCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveNotCamelCased();
        }
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function toArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->toArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->toArrayRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->toArrayNotRecursiveNotCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->toArrayNotRecursiveCamelCased();
        }
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollectionModified($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->modifiedToArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollection($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->toArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, true);

                continue;
            }
            switch ($property) {
                case 'idProductMeasurementSalesUnit':
                    $values[$arrayKey] = $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, false);

                continue;
            }
            switch ($property) {
                case 'idProductMeasurementSalesUnit':
                    $values[$arrayKey] = $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return void
     */
    protected function initCollectionProperties(): void
    {
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idProductMeasurementSalesUnit' => $this->idProductMeasurementSalesUnit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_sales_unit' => $this->idProductMeasurementSalesUnit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_measurement_sales_unit' => $this->idProductMeasurementSalesUnit instanceof AbstractTransfer ? $this->idProductMeasurementSalesUnit->toArray(true, false) : $this->idProductMeasurementSalesUnit,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductMeasurementSalesUnit' => $this->idProductMeasurementSalesUnit instanceof AbstractTransfer ? $this->idProductMeasurementSalesUnit->toArray(true, true) : $this->idProductMeasurementSalesUnit,
        ];
    }
}
