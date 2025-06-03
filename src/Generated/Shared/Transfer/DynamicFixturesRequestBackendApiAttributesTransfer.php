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
class DynamicFixturesRequestBackendApiAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SYNCHRONIZE = 'synchronize';

    /**
     * @var string
     */
    public const OPERATIONS = 'operations';

    /**
     * @var bool|null
     */
    protected $synchronize;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\DynamicFixtureOperationTransfer>
     */
    protected $operations;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'synchronize' => 'synchronize',
        'Synchronize' => 'synchronize',
        'operations' => 'operations',
        'Operations' => 'operations',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SYNCHRONIZE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'synchronize',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::OPERATIONS => [
            'type' => 'Generated\Shared\Transfer\DynamicFixtureOperationTransfer',
            'type_shim' => null,
            'name_underscore' => 'operations',
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
     * @module TestifyBackendApi
     *
     * @param bool|null $synchronize
     *
     * @return $this
     */
    public function setSynchronize(?bool $synchronize = null)
    {
        $this->synchronize = $synchronize;
        $this->modifiedProperties[self::SYNCHRONIZE] = true;

        return $this;
    }

    /**
     * @module TestifyBackendApi
     *
     * @return bool|null
     */
    public function getSynchronize(): ?bool
    {
        return $this->synchronize;
    }

    /**
     * @module TestifyBackendApi
     *
     * @param bool $synchronize
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSynchronizeOrFail(bool $synchronize)
    {
        return $this->setSynchronize($synchronize);
    }

    /**
     * @module TestifyBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getSynchronizeOrFail(): bool
    {
        if ($this->synchronize === null) {
            $this->throwNullValueException(static::SYNCHRONIZE);
        }

        return $this->synchronize;
    }

    /**
     * @module TestifyBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSynchronize()
    {
        $this->assertPropertyIsSet(self::SYNCHRONIZE);

        return $this;
    }

    /**
     * @module TestifyBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\DynamicFixtureOperationTransfer> $operations
     *
     * @return $this
     */
    public function setOperations(ArrayObject $operations)
    {
        $this->operations = new ArrayObject();

        foreach ($operations as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::OPERATIONS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addOperation(...$args);
        }

        $this->modifiedProperties[self::OPERATIONS] = true;

        return $this;
    }

    /**
     * @module TestifyBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\DynamicFixtureOperationTransfer>
     */
    public function getOperations(): ArrayObject
    {
        return $this->operations;
    }

    /**
     * @module TestifyBackendApi
     *
     * @param \Generated\Shared\Transfer\DynamicFixtureOperationTransfer $operation
     *
     * @return $this
     */
    public function addOperation(DynamicFixtureOperationTransfer $operation)
    {
        $this->operations[] = $operation;
        $this->modifiedProperties[self::OPERATIONS] = true;

        return $this;
    }

    /**
     * @module TestifyBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOperations()
    {
        $this->assertCollectionPropertyIsSet(self::OPERATIONS);

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
                case 'synchronize':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'operations':
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
                case 'synchronize':
                    $values[$arrayKey] = $value;

                    break;
                case 'operations':
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
                case 'synchronize':
                    $values[$arrayKey] = $value;

                    break;
                case 'operations':
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
        $this->operations = $this->operations ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'synchronize' => $this->synchronize,
            'operations' => $this->operations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'synchronize' => $this->synchronize,
            'operations' => $this->operations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'synchronize' => $this->synchronize instanceof AbstractTransfer ? $this->synchronize->toArray(true, false) : $this->synchronize,
            'operations' => $this->operations instanceof AbstractTransfer ? $this->operations->toArray(true, false) : $this->addValuesToCollection($this->operations, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'synchronize' => $this->synchronize instanceof AbstractTransfer ? $this->synchronize->toArray(true, true) : $this->synchronize,
            'operations' => $this->operations instanceof AbstractTransfer ? $this->operations->toArray(true, true) : $this->addValuesToCollection($this->operations, true, true),
        ];
    }
}
