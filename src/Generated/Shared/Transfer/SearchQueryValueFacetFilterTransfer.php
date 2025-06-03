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
class SearchQueryValueFacetFilterTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FIELD_NAME = 'fieldName';

    /**
     * @var string
     */
    public const VALUES = 'values';

    /**
     * @var string|null
     */
    protected $fieldName;

    /**
     * @var array
     */
    protected $values = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'field_name' => 'fieldName',
        'fieldName' => 'fieldName',
        'FieldName' => 'fieldName',
        'values' => 'values',
        'Values' => 'values',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FIELD_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'field_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALUES => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'values',
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
     * @module CatalogPriceProductConnector|SearchHttp
     *
     * @param string|null $fieldName
     *
     * @return $this
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
        $this->modifiedProperties[self::FIELD_NAME] = true;

        return $this;
    }

    /**
     * @module CatalogPriceProductConnector|SearchHttp
     *
     * @return string|null
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * @module CatalogPriceProductConnector|SearchHttp
     *
     * @param string|null $fieldName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFieldNameOrFail($fieldName)
    {
        if ($fieldName === null) {
            $this->throwNullValueException(static::FIELD_NAME);
        }

        return $this->setFieldName($fieldName);
    }

    /**
     * @module CatalogPriceProductConnector|SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFieldNameOrFail()
    {
        if ($this->fieldName === null) {
            $this->throwNullValueException(static::FIELD_NAME);
        }

        return $this->fieldName;
    }

    /**
     * @module CatalogPriceProductConnector|SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFieldName()
    {
        $this->assertPropertyIsSet(self::FIELD_NAME);

        return $this;
    }

    /**
     * @module CatalogPriceProductConnector|SearchHttp
     *
     * @param array|null $values
     *
     * @return $this
     */
    public function setValues(array $values = null)
    {
        if ($values === null) {
            $values = [];
        }

        $this->values = $values;
        $this->modifiedProperties[self::VALUES] = true;

        return $this;
    }

    /**
     * @module CatalogPriceProductConnector|SearchHttp
     *
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @module CatalogPriceProductConnector|SearchHttp
     *
     * @param mixed $value
     *
     * @return $this
     */
    public function addValue($value)
    {
        $this->values[] = $value;
        $this->modifiedProperties[self::VALUES] = true;

        return $this;
    }

    /**
     * @module CatalogPriceProductConnector|SearchHttp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValues()
    {
        $this->assertPropertyIsSet(self::VALUES);

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
                case 'fieldName':
                case 'values':
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
                case 'fieldName':
                case 'values':
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
                case 'fieldName':
                case 'values':
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
            'fieldName' => $this->fieldName,
            'values' => $this->values,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'field_name' => $this->fieldName,
            'values' => $this->values,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'field_name' => $this->fieldName instanceof AbstractTransfer ? $this->fieldName->toArray(true, false) : $this->fieldName,
            'values' => $this->values instanceof AbstractTransfer ? $this->values->toArray(true, false) : $this->values,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'fieldName' => $this->fieldName instanceof AbstractTransfer ? $this->fieldName->toArray(true, true) : $this->fieldName,
            'values' => $this->values instanceof AbstractTransfer ? $this->values->toArray(true, true) : $this->values,
        ];
    }
}
