<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class DynamicEntityPostEditRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TABLE_NAME = 'tableName';

    /**
     * @var string
     */
    public const RAW_DYNAMIC_ENTITIES = 'rawDynamicEntities';

    /**
     * @var string|null
     */
    protected $tableName;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\RawDynamicEntityTransfer>
     */
    protected $rawDynamicEntities;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'table_name' => 'tableName',
        'tableName' => 'tableName',
        'TableName' => 'tableName',
        'raw_dynamic_entities' => 'rawDynamicEntities',
        'rawDynamicEntities' => 'rawDynamicEntities',
        'RawDynamicEntities' => 'rawDynamicEntities',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TABLE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'table_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::RAW_DYNAMIC_ENTITIES => [
            'type' => 'Generated\Shared\Transfer\RawDynamicEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'raw_dynamic_entities',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module Availability|CategoryDynamicEntityConnector|DynamicEntity|ProductDynamicEntityConnector
     *
     * @param string|null $tableName
     *
     * @return $this
     */
    public function setTableName(?string $tableName = null)
    {
        $this->tableName = $tableName;
        $this->modifiedProperties[self::TABLE_NAME] = true;

        return $this;
    }

    /**
     * @module Availability|CategoryDynamicEntityConnector|DynamicEntity|ProductDynamicEntityConnector
     *
     * @return string|null
     */
    public function getTableName(): ?string
    {
        return $this->tableName;
    }

    /**
     * @module Availability|CategoryDynamicEntityConnector|DynamicEntity|ProductDynamicEntityConnector
     *
     * @param string $tableName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTableNameOrFail(string $tableName)
    {
        return $this->setTableName($tableName);
    }

    /**
     * @module Availability|CategoryDynamicEntityConnector|DynamicEntity|ProductDynamicEntityConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTableNameOrFail(): string
    {
        if ($this->tableName === null) {
            $this->throwNullValueException(static::TABLE_NAME);
        }

        return $this->tableName;
    }

    /**
     * @module Availability|CategoryDynamicEntityConnector|DynamicEntity|ProductDynamicEntityConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTableName()
    {
        $this->assertPropertyIsSet(self::TABLE_NAME);

        return $this;
    }

    /**
     * @module Availability|CategoryDynamicEntityConnector|DynamicEntity|ProductDynamicEntityConnector
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\RawDynamicEntityTransfer> $rawDynamicEntities
     *
     * @return $this
     */
    public function setRawDynamicEntities(ArrayObject $rawDynamicEntities)
    {
        $this->rawDynamicEntities = new ArrayObject();

        foreach ($rawDynamicEntities as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::RAW_DYNAMIC_ENTITIES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addRawDynamicEntity(...$args);
        }

        $this->modifiedProperties[self::RAW_DYNAMIC_ENTITIES] = true;

        return $this;
    }

    /**
     * @module Availability|CategoryDynamicEntityConnector|DynamicEntity|ProductDynamicEntityConnector
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\RawDynamicEntityTransfer>
     */
    public function getRawDynamicEntities(): ArrayObject
    {
        return $this->rawDynamicEntities;
    }

    /**
     * @module Availability|CategoryDynamicEntityConnector|DynamicEntity|ProductDynamicEntityConnector
     *
     * @param \Generated\Shared\Transfer\RawDynamicEntityTransfer $rawDynamicEntity
     *
     * @return $this
     */
    public function addRawDynamicEntity(RawDynamicEntityTransfer $rawDynamicEntity)
    {
        $this->rawDynamicEntities[] = $rawDynamicEntity;
        $this->modifiedProperties[self::RAW_DYNAMIC_ENTITIES] = true;

        return $this;
    }

    /**
     * @module Availability|CategoryDynamicEntityConnector|DynamicEntity|ProductDynamicEntityConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRawDynamicEntities()
    {
        $this->assertCollectionPropertyIsSet(self::RAW_DYNAMIC_ENTITIES);

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
                case 'tableName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'rawDynamicEntities':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'tableName':
                    $values[$arrayKey] = $value;

                    break;
                case 'rawDynamicEntities':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

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
                case 'tableName':
                    $values[$arrayKey] = $value;

                    break;
                case 'rawDynamicEntities':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

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
        $this->rawDynamicEntities = $this->rawDynamicEntities ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'tableName' => $this->tableName,
            'rawDynamicEntities' => $this->rawDynamicEntities,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'table_name' => $this->tableName,
            'raw_dynamic_entities' => $this->rawDynamicEntities,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'table_name' => $this->tableName instanceof AbstractTransfer ? $this->tableName->toArray(true, false) : $this->tableName,
            'raw_dynamic_entities' => $this->rawDynamicEntities instanceof AbstractTransfer ? $this->rawDynamicEntities->toArray(true, false) : $this->addValuesToCollection($this->rawDynamicEntities, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'tableName' => $this->tableName instanceof AbstractTransfer ? $this->tableName->toArray(true, true) : $this->tableName,
            'rawDynamicEntities' => $this->rawDynamicEntities instanceof AbstractTransfer ? $this->rawDynamicEntities->toArray(true, true) : $this->addValuesToCollection($this->rawDynamicEntities, true, true),
        ];
    }
}
