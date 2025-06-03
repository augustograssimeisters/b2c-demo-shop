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
class ProductAttributeKeyConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const KEYS = 'keys';

    /**
     * @var string
     */
    public const IS_SUPER = 'isSuper';

    /**
     * @var string[]
     */
    protected $keys = [];

    /**
     * @var bool|null
     */
    protected $isSuper;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'keys' => 'keys',
        'Keys' => 'keys',
        'is_super' => 'isSuper',
        'isSuper' => 'isSuper',
        'IsSuper' => 'isSuper',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::KEYS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'keys',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_SUPER => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_super',
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
     * @module Product
     *
     * @param string[]|null $keys
     *
     * @return $this
     */
    public function setKeys(array $keys = null)
    {
        if ($keys === null) {
            $keys = [];
        }

        $this->keys = [];

        foreach ($keys as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::KEYS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addKey(...$args);
        }

        $this->modifiedProperties[self::KEYS] = true;

        return $this;
    }

    /**
     * @module Product
     *
     * @return string[]
     */
    public function getKeys(): array
    {
        return $this->keys;
    }

    /**
     * @module Product
     *
     * @param string $key
     *
     * @return $this
     */
    public function addKey(string $key)
    {
        $this->keys[] = $key;
        $this->modifiedProperties[self::KEYS] = true;

        return $this;
    }

    /**
     * @module Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKeys()
    {
        $this->assertPropertyIsSet(self::KEYS);

        return $this;
    }

    /**
     * @module Product
     *
     * @param bool|null $isSuper
     *
     * @return $this
     */
    public function setIsSuper(?bool $isSuper = null)
    {
        $this->isSuper = $isSuper;
        $this->modifiedProperties[self::IS_SUPER] = true;

        return $this;
    }

    /**
     * @module Product
     *
     * @return bool|null
     */
    public function getIsSuper(): ?bool
    {
        return $this->isSuper;
    }

    /**
     * @module Product
     *
     * @param bool $isSuper
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSuperOrFail(bool $isSuper)
    {
        return $this->setIsSuper($isSuper);
    }

    /**
     * @module Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSuperOrFail(): bool
    {
        if ($this->isSuper === null) {
            $this->throwNullValueException(static::IS_SUPER);
        }

        return $this->isSuper;
    }

    /**
     * @module Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSuper()
    {
        $this->assertPropertyIsSet(self::IS_SUPER);

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
                case 'keys':
                case 'isSuper':
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
                case 'keys':
                case 'isSuper':
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
                case 'keys':
                case 'isSuper':
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
            'keys' => $this->keys,
            'isSuper' => $this->isSuper,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'keys' => $this->keys,
            'is_super' => $this->isSuper,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'keys' => $this->keys instanceof AbstractTransfer ? $this->keys->toArray(true, false) : $this->keys,
            'is_super' => $this->isSuper instanceof AbstractTransfer ? $this->isSuper->toArray(true, false) : $this->isSuper,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'keys' => $this->keys instanceof AbstractTransfer ? $this->keys->toArray(true, true) : $this->keys,
            'isSuper' => $this->isSuper instanceof AbstractTransfer ? $this->isSuper->toArray(true, true) : $this->isSuper,
        ];
    }
}
