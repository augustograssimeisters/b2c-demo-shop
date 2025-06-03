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
class DynamicEntityConfigurationConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const FILTER_CREATED_AT = 'filterCreatedAt';

    /**
     * @var string
     */
    public const FILTER_UPDATED_AT = 'filterUpdatedAt';

    /**
     * @var string
     */
    public const TABLE_NAME = 'tableName';

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var \Generated\Shared\Transfer\CriteriaRangeFilterTransfer|null
     */
    protected $filterCreatedAt;

    /**
     * @var \Generated\Shared\Transfer\CriteriaRangeFilterTransfer|null
     */
    protected $filterUpdatedAt;

    /**
     * @var string|null
     */
    protected $tableName;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'filter_created_at' => 'filterCreatedAt',
        'filterCreatedAt' => 'filterCreatedAt',
        'FilterCreatedAt' => 'filterCreatedAt',
        'filter_updated_at' => 'filterUpdatedAt',
        'filterUpdatedAt' => 'filterUpdatedAt',
        'FilterUpdatedAt' => 'filterUpdatedAt',
        'table_name' => 'tableName',
        'tableName' => 'tableName',
        'TableName' => 'tableName',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_ACTIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::FILTER_CREATED_AT => [
            'type' => 'Generated\Shared\Transfer\CriteriaRangeFilterTransfer',
            'type_shim' => null,
            'name_underscore' => 'filter_created_at',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::FILTER_UPDATED_AT => [
            'type' => 'Generated\Shared\Transfer\CriteriaRangeFilterTransfer',
            'type_shim' => null,
            'name_underscore' => 'filter_updated_at',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
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
    ];

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param bool|null $isActive
     *
     * @return $this
     */
    public function setIsActive(?bool $isActive = null)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param bool $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail(bool $isActive)
    {
        return $this->setIsActive($isActive);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsActiveOrFail(): bool
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsActive()
    {
        $this->assertPropertyIsSet(self::IS_ACTIVE);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param \Generated\Shared\Transfer\CriteriaRangeFilterTransfer|null $filterCreatedAt
     *
     * @return $this
     */
    public function setFilterCreatedAt(?CriteriaRangeFilterTransfer $filterCreatedAt = null)
    {
        $this->filterCreatedAt = $filterCreatedAt;
        $this->modifiedProperties[self::FILTER_CREATED_AT] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return \Generated\Shared\Transfer\CriteriaRangeFilterTransfer|null
     */
    public function getFilterCreatedAt(): ?CriteriaRangeFilterTransfer
    {
        return $this->filterCreatedAt;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param \Generated\Shared\Transfer\CriteriaRangeFilterTransfer $filterCreatedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFilterCreatedAtOrFail(CriteriaRangeFilterTransfer $filterCreatedAt)
    {
        return $this->setFilterCreatedAt($filterCreatedAt);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CriteriaRangeFilterTransfer
     */
    public function getFilterCreatedAtOrFail(): CriteriaRangeFilterTransfer
    {
        if ($this->filterCreatedAt === null) {
            $this->throwNullValueException(static::FILTER_CREATED_AT);
        }

        return $this->filterCreatedAt;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilterCreatedAt()
    {
        $this->assertPropertyIsSet(self::FILTER_CREATED_AT);

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @param \Generated\Shared\Transfer\CriteriaRangeFilterTransfer|null $filterUpdatedAt
     *
     * @return $this
     */
    public function setFilterUpdatedAt(?CriteriaRangeFilterTransfer $filterUpdatedAt = null)
    {
        $this->filterUpdatedAt = $filterUpdatedAt;
        $this->modifiedProperties[self::FILTER_UPDATED_AT] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @return \Generated\Shared\Transfer\CriteriaRangeFilterTransfer|null
     */
    public function getFilterUpdatedAt(): ?CriteriaRangeFilterTransfer
    {
        return $this->filterUpdatedAt;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @param \Generated\Shared\Transfer\CriteriaRangeFilterTransfer $filterUpdatedAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFilterUpdatedAtOrFail(CriteriaRangeFilterTransfer $filterUpdatedAt)
    {
        return $this->setFilterUpdatedAt($filterUpdatedAt);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CriteriaRangeFilterTransfer
     */
    public function getFilterUpdatedAtOrFail(): CriteriaRangeFilterTransfer
    {
        if ($this->filterUpdatedAt === null) {
            $this->throwNullValueException(static::FILTER_UPDATED_AT);
        }

        return $this->filterUpdatedAt;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntityGui|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFilterUpdatedAt()
    {
        $this->assertPropertyIsSet(self::FILTER_UPDATED_AT);

        return $this;
    }

    /**
     * @module DynamicEntityGui|DynamicEntity
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
     * @module DynamicEntityGui|DynamicEntity
     *
     * @return string|null
     */
    public function getTableName(): ?string
    {
        return $this->tableName;
    }

    /**
     * @module DynamicEntityGui|DynamicEntity
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
     * @module DynamicEntityGui|DynamicEntity
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
     * @module DynamicEntityGui|DynamicEntity
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
                case 'isActive':
                case 'tableName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'filterCreatedAt':
                case 'filterUpdatedAt':
                    if (is_array($value)) {
                        $type = $this->transferMetadata[$normalizedPropertyName]['type'];
                        /** @var \Spryker\Shared\Kernel\Transfer\TransferInterface $value */
                        $value = (new $type())->fromArray($value, $ignoreMissingProperty);
                    }

                    if ($value !== null && $this->isPropertyStrict($normalizedPropertyName)) {
                        $this->assertInstanceOfTransfer($normalizedPropertyName, $value);
                    }
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
                case 'isActive':
                case 'tableName':
                    $values[$arrayKey] = $value;

                    break;
                case 'filterCreatedAt':
                case 'filterUpdatedAt':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

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
                case 'isActive':
                case 'tableName':
                    $values[$arrayKey] = $value;

                    break;
                case 'filterCreatedAt':
                case 'filterUpdatedAt':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

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
            'isActive' => $this->isActive,
            'tableName' => $this->tableName,
            'filterCreatedAt' => $this->filterCreatedAt,
            'filterUpdatedAt' => $this->filterUpdatedAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_active' => $this->isActive,
            'table_name' => $this->tableName,
            'filter_created_at' => $this->filterCreatedAt,
            'filter_updated_at' => $this->filterUpdatedAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'table_name' => $this->tableName instanceof AbstractTransfer ? $this->tableName->toArray(true, false) : $this->tableName,
            'filter_created_at' => $this->filterCreatedAt instanceof AbstractTransfer ? $this->filterCreatedAt->toArray(true, false) : $this->filterCreatedAt,
            'filter_updated_at' => $this->filterUpdatedAt instanceof AbstractTransfer ? $this->filterUpdatedAt->toArray(true, false) : $this->filterUpdatedAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'tableName' => $this->tableName instanceof AbstractTransfer ? $this->tableName->toArray(true, true) : $this->tableName,
            'filterCreatedAt' => $this->filterCreatedAt instanceof AbstractTransfer ? $this->filterCreatedAt->toArray(true, true) : $this->filterCreatedAt,
            'filterUpdatedAt' => $this->filterUpdatedAt instanceof AbstractTransfer ? $this->filterUpdatedAt->toArray(true, true) : $this->filterUpdatedAt,
        ];
    }
}
