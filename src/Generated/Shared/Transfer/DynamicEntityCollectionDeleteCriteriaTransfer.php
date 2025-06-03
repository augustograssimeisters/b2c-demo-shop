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
class DynamicEntityCollectionDeleteCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const DYNAMIC_ENTITY_CONDITIONS = 'dynamicEntityConditions';

    /**
     * @var string
     */
    public const IS_TRANSACTIONAL = 'isTransactional';

    /**
     * @var string
     */
    public const DYNAMIC_ENTITY_IDS = 'dynamicEntityIds';

    /**
     * @var \Generated\Shared\Transfer\DynamicEntityConditionsTransfer|null
     */
    protected $dynamicEntityConditions;

    /**
     * @var bool|null
     */
    protected $isTransactional;

    /**
     * @var int[]
     */
    protected $dynamicEntityIds = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'dynamic_entity_conditions' => 'dynamicEntityConditions',
        'dynamicEntityConditions' => 'dynamicEntityConditions',
        'DynamicEntityConditions' => 'dynamicEntityConditions',
        'is_transactional' => 'isTransactional',
        'isTransactional' => 'isTransactional',
        'IsTransactional' => 'isTransactional',
        'dynamic_entity_ids' => 'dynamicEntityIds',
        'dynamicEntityIds' => 'dynamicEntityIds',
        'DynamicEntityIds' => 'dynamicEntityIds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::DYNAMIC_ENTITY_CONDITIONS => [
            'type' => 'Generated\Shared\Transfer\DynamicEntityConditionsTransfer',
            'type_shim' => null,
            'name_underscore' => 'dynamic_entity_conditions',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_TRANSACTIONAL => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_transactional',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::DYNAMIC_ENTITY_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'dynamic_entity_ids',
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
     * @param \Generated\Shared\Transfer\DynamicEntityConditionsTransfer|null $dynamicEntityConditions
     *
     * @return $this
     */
    public function setDynamicEntityConditions(?DynamicEntityConditionsTransfer $dynamicEntityConditions = null)
    {
        $this->dynamicEntityConditions = $dynamicEntityConditions;
        $this->modifiedProperties[self::DYNAMIC_ENTITY_CONDITIONS] = true;

        return $this;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @return \Generated\Shared\Transfer\DynamicEntityConditionsTransfer|null
     */
    public function getDynamicEntityConditions(): ?DynamicEntityConditionsTransfer
    {
        return $this->dynamicEntityConditions;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @param \Generated\Shared\Transfer\DynamicEntityConditionsTransfer $dynamicEntityConditions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDynamicEntityConditionsOrFail(DynamicEntityConditionsTransfer $dynamicEntityConditions)
    {
        return $this->setDynamicEntityConditions($dynamicEntityConditions);
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\DynamicEntityConditionsTransfer
     */
    public function getDynamicEntityConditionsOrFail(): DynamicEntityConditionsTransfer
    {
        if ($this->dynamicEntityConditions === null) {
            $this->throwNullValueException(static::DYNAMIC_ENTITY_CONDITIONS);
        }

        return $this->dynamicEntityConditions;
    }

    /**
     * @module DynamicEntityBackendApi|DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDynamicEntityConditions()
    {
        $this->assertPropertyIsSet(self::DYNAMIC_ENTITY_CONDITIONS);

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @param bool|null $isTransactional
     *
     * @return $this
     */
    public function setIsTransactional(?bool $isTransactional = null)
    {
        $this->isTransactional = $isTransactional;
        $this->modifiedProperties[self::IS_TRANSACTIONAL] = true;

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @return bool|null
     */
    public function getIsTransactional(): ?bool
    {
        return $this->isTransactional;
    }

    /**
     * @module DynamicEntity
     *
     * @param bool $isTransactional
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsTransactionalOrFail(bool $isTransactional)
    {
        return $this->setIsTransactional($isTransactional);
    }

    /**
     * @module DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsTransactionalOrFail(): bool
    {
        if ($this->isTransactional === null) {
            $this->throwNullValueException(static::IS_TRANSACTIONAL);
        }

        return $this->isTransactional;
    }

    /**
     * @module DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsTransactional()
    {
        $this->assertPropertyIsSet(self::IS_TRANSACTIONAL);

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @param int[]|null $dynamicEntityIds
     *
     * @return $this
     */
    public function setDynamicEntityIds(array $dynamicEntityIds = null)
    {
        if ($dynamicEntityIds === null) {
            $dynamicEntityIds = [];
        }

        $this->dynamicEntityIds = [];

        foreach ($dynamicEntityIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::DYNAMIC_ENTITY_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdDynamicEntity(...$args);
        }

        $this->modifiedProperties[self::DYNAMIC_ENTITY_IDS] = true;

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @return int[]
     */
    public function getDynamicEntityIds(): array
    {
        return $this->dynamicEntityIds;
    }

    /**
     * @module DynamicEntity
     *
     * @param int $idDynamicEntity
     *
     * @return $this
     */
    public function addIdDynamicEntity(int $idDynamicEntity)
    {
        $this->dynamicEntityIds[] = $idDynamicEntity;
        $this->modifiedProperties[self::DYNAMIC_ENTITY_IDS] = true;

        return $this;
    }

    /**
     * @module DynamicEntity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDynamicEntityIds()
    {
        $this->assertPropertyIsSet(self::DYNAMIC_ENTITY_IDS);

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
                case 'isTransactional':
                case 'dynamicEntityIds':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'dynamicEntityConditions':
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
                case 'isTransactional':
                case 'dynamicEntityIds':
                    $values[$arrayKey] = $value;

                    break;
                case 'dynamicEntityConditions':
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
                case 'isTransactional':
                case 'dynamicEntityIds':
                    $values[$arrayKey] = $value;

                    break;
                case 'dynamicEntityConditions':
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
            'isTransactional' => $this->isTransactional,
            'dynamicEntityIds' => $this->dynamicEntityIds,
            'dynamicEntityConditions' => $this->dynamicEntityConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_transactional' => $this->isTransactional,
            'dynamic_entity_ids' => $this->dynamicEntityIds,
            'dynamic_entity_conditions' => $this->dynamicEntityConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_transactional' => $this->isTransactional instanceof AbstractTransfer ? $this->isTransactional->toArray(true, false) : $this->isTransactional,
            'dynamic_entity_ids' => $this->dynamicEntityIds instanceof AbstractTransfer ? $this->dynamicEntityIds->toArray(true, false) : $this->dynamicEntityIds,
            'dynamic_entity_conditions' => $this->dynamicEntityConditions instanceof AbstractTransfer ? $this->dynamicEntityConditions->toArray(true, false) : $this->dynamicEntityConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isTransactional' => $this->isTransactional instanceof AbstractTransfer ? $this->isTransactional->toArray(true, true) : $this->isTransactional,
            'dynamicEntityIds' => $this->dynamicEntityIds instanceof AbstractTransfer ? $this->dynamicEntityIds->toArray(true, true) : $this->dynamicEntityIds,
            'dynamicEntityConditions' => $this->dynamicEntityConditions instanceof AbstractTransfer ? $this->dynamicEntityConditions->toArray(true, true) : $this->dynamicEntityConditions,
        ];
    }
}
