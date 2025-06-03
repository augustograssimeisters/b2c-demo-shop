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
class WarehouseUserAssignmentCollectionRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const WAREHOUSE_USER_ASSIGNMENTS = 'warehouseUserAssignments';

    /**
     * @var string
     */
    public const IS_TRANSACTIONAL = 'isTransactional';

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\WarehouseUserAssignmentTransfer>
     */
    protected $warehouseUserAssignments;

    /**
     * @var bool|null
     */
    protected $isTransactional;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'warehouse_user_assignments' => 'warehouseUserAssignments',
        'warehouseUserAssignments' => 'warehouseUserAssignments',
        'WarehouseUserAssignments' => 'warehouseUserAssignments',
        'is_transactional' => 'isTransactional',
        'isTransactional' => 'isTransactional',
        'IsTransactional' => 'isTransactional',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::WAREHOUSE_USER_ASSIGNMENTS => [
            'type' => 'Generated\Shared\Transfer\WarehouseUserAssignmentTransfer',
            'type_shim' => null,
            'name_underscore' => 'warehouse_user_assignments',
            'is_collection' => true,
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
    ];

    /**
     * @module WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\WarehouseUserAssignmentTransfer> $warehouseUserAssignments
     *
     * @return $this
     */
    public function setWarehouseUserAssignments(ArrayObject $warehouseUserAssignments)
    {
        $this->warehouseUserAssignments = new ArrayObject();

        foreach ($warehouseUserAssignments as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::WAREHOUSE_USER_ASSIGNMENTS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addWarehouseUserAssignment(...$args);
        }

        $this->modifiedProperties[self::WAREHOUSE_USER_ASSIGNMENTS] = true;

        return $this;
    }

    /**
     * @module WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\WarehouseUserAssignmentTransfer>
     */
    public function getWarehouseUserAssignments(): ArrayObject
    {
        return $this->warehouseUserAssignments;
    }

    /**
     * @module WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @param \Generated\Shared\Transfer\WarehouseUserAssignmentTransfer $warehouseUserAssignment
     *
     * @return $this
     */
    public function addWarehouseUserAssignment(WarehouseUserAssignmentTransfer $warehouseUserAssignment)
    {
        $this->warehouseUserAssignments[] = $warehouseUserAssignment;
        $this->modifiedProperties[self::WAREHOUSE_USER_ASSIGNMENTS] = true;

        return $this;
    }

    /**
     * @module WarehouseUserGui|WarehouseUser|WarehouseUsersBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWarehouseUserAssignments()
    {
        $this->assertCollectionPropertyIsSet(self::WAREHOUSE_USER_ASSIGNMENTS);

        return $this;
    }

    /**
     * @module WarehouseUser
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
     * @module WarehouseUser
     *
     * @return bool|null
     */
    public function getIsTransactional(): ?bool
    {
        return $this->isTransactional;
    }

    /**
     * @module WarehouseUser
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
     * @module WarehouseUser
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
     * @module WarehouseUser
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
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'warehouseUserAssignments':
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
                case 'isTransactional':
                    $values[$arrayKey] = $value;

                    break;
                case 'warehouseUserAssignments':
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
                case 'isTransactional':
                    $values[$arrayKey] = $value;

                    break;
                case 'warehouseUserAssignments':
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
        $this->warehouseUserAssignments = $this->warehouseUserAssignments ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isTransactional' => $this->isTransactional,
            'warehouseUserAssignments' => $this->warehouseUserAssignments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_transactional' => $this->isTransactional,
            'warehouse_user_assignments' => $this->warehouseUserAssignments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_transactional' => $this->isTransactional instanceof AbstractTransfer ? $this->isTransactional->toArray(true, false) : $this->isTransactional,
            'warehouse_user_assignments' => $this->warehouseUserAssignments instanceof AbstractTransfer ? $this->warehouseUserAssignments->toArray(true, false) : $this->addValuesToCollection($this->warehouseUserAssignments, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isTransactional' => $this->isTransactional instanceof AbstractTransfer ? $this->isTransactional->toArray(true, true) : $this->isTransactional,
            'warehouseUserAssignments' => $this->warehouseUserAssignments instanceof AbstractTransfer ? $this->warehouseUserAssignments->toArray(true, true) : $this->addValuesToCollection($this->warehouseUserAssignments, true, true),
        ];
    }
}
