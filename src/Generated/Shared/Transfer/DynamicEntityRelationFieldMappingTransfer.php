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
class DynamicEntityRelationFieldMappingTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CHILD_FIELD_NAME = 'childFieldName';

    /**
     * @var string
     */
    public const PARENT_FIELD_NAME = 'parentFieldName';

    /**
     * @var string|null
     */
    protected $childFieldName;

    /**
     * @var string|null
     */
    protected $parentFieldName;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'child_field_name' => 'childFieldName',
        'childFieldName' => 'childFieldName',
        'ChildFieldName' => 'childFieldName',
        'parent_field_name' => 'parentFieldName',
        'parentFieldName' => 'parentFieldName',
        'ParentFieldName' => 'parentFieldName',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CHILD_FIELD_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'child_field_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::PARENT_FIELD_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'parent_field_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module DynamicEntity
     *
     * @param string|null $childFieldName
     *
     * @return $this
     */
    public function setChildFieldName(?string $childFieldName = null)
    {
        $this->childFieldName = $childFieldName;
        $this->modifiedProperties[self::CHILD_FIELD_NAME] = true;

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @return string|null
     */
    public function getChildFieldName(): ?string
    {
        return $this->childFieldName;
    }

    /**
     * @module DynamicEntity
     *
     * @param string $childFieldName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setChildFieldNameOrFail(string $childFieldName)
    {
        return $this->setChildFieldName($childFieldName);
    }

    /**
     * @module DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getChildFieldNameOrFail(): string
    {
        if ($this->childFieldName === null) {
            $this->throwNullValueException(static::CHILD_FIELD_NAME);
        }

        return $this->childFieldName;
    }

    /**
     * @module DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireChildFieldName()
    {
        $this->assertPropertyIsSet(self::CHILD_FIELD_NAME);

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @param string|null $parentFieldName
     *
     * @return $this
     */
    public function setParentFieldName(?string $parentFieldName = null)
    {
        $this->parentFieldName = $parentFieldName;
        $this->modifiedProperties[self::PARENT_FIELD_NAME] = true;

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @return string|null
     */
    public function getParentFieldName(): ?string
    {
        return $this->parentFieldName;
    }

    /**
     * @module DynamicEntity
     *
     * @param string $parentFieldName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setParentFieldNameOrFail(string $parentFieldName)
    {
        return $this->setParentFieldName($parentFieldName);
    }

    /**
     * @module DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getParentFieldNameOrFail(): string
    {
        if ($this->parentFieldName === null) {
            $this->throwNullValueException(static::PARENT_FIELD_NAME);
        }

        return $this->parentFieldName;
    }

    /**
     * @module DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParentFieldName()
    {
        $this->assertPropertyIsSet(self::PARENT_FIELD_NAME);

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
                case 'childFieldName':
                case 'parentFieldName':
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
                case 'childFieldName':
                case 'parentFieldName':
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
                case 'childFieldName':
                case 'parentFieldName':
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
            'childFieldName' => $this->childFieldName,
            'parentFieldName' => $this->parentFieldName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'child_field_name' => $this->childFieldName,
            'parent_field_name' => $this->parentFieldName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'child_field_name' => $this->childFieldName instanceof AbstractTransfer ? $this->childFieldName->toArray(true, false) : $this->childFieldName,
            'parent_field_name' => $this->parentFieldName instanceof AbstractTransfer ? $this->parentFieldName->toArray(true, false) : $this->parentFieldName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'childFieldName' => $this->childFieldName instanceof AbstractTransfer ? $this->childFieldName->toArray(true, true) : $this->childFieldName,
            'parentFieldName' => $this->parentFieldName instanceof AbstractTransfer ? $this->parentFieldName->toArray(true, true) : $this->parentFieldName,
        ];
    }
}
