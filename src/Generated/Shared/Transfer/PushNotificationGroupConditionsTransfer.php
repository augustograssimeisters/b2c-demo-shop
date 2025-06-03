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
class PushNotificationGroupConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAMES = 'names';

    /**
     * @var string
     */
    public const IDENTIFIERS = 'identifiers';

    /**
     * @var string[]
     */
    protected $names = [];

    /**
     * @var string[]
     */
    protected $identifiers = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'names' => 'names',
        'Names' => 'names',
        'identifiers' => 'identifiers',
        'Identifiers' => 'identifiers',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NAMES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'names',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IDENTIFIERS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'identifiers',
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
     * @module PushNotification
     *
     * @param string[]|null $names
     *
     * @return $this
     */
    public function setNames(array $names = null)
    {
        if ($names === null) {
            $names = [];
        }

        $this->names = [];

        foreach ($names as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::NAMES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addName(...$args);
        }

        $this->modifiedProperties[self::NAMES] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @return string[]
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @module PushNotification
     *
     * @param string $name
     *
     * @return $this
     */
    public function addName(string $name)
    {
        $this->names[] = $name;
        $this->modifiedProperties[self::NAMES] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNames()
    {
        $this->assertPropertyIsSet(self::NAMES);

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @param string[]|null $identifiers
     *
     * @return $this
     */
    public function setIdentifiers(array $identifiers = null)
    {
        if ($identifiers === null) {
            $identifiers = [];
        }

        $this->identifiers = [];

        foreach ($identifiers as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::IDENTIFIERS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdentifier(...$args);
        }

        $this->modifiedProperties[self::IDENTIFIERS] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @return string[]
     */
    public function getIdentifiers(): array
    {
        return $this->identifiers;
    }

    /**
     * @module PushNotification
     *
     * @param string $identifier
     *
     * @return $this
     */
    public function addIdentifier(string $identifier)
    {
        $this->identifiers[] = $identifier;
        $this->modifiedProperties[self::IDENTIFIERS] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdentifiers()
    {
        $this->assertPropertyIsSet(self::IDENTIFIERS);

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
                case 'names':
                case 'identifiers':
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
                case 'names':
                case 'identifiers':
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
                case 'names':
                case 'identifiers':
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
            'names' => $this->names,
            'identifiers' => $this->identifiers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'names' => $this->names,
            'identifiers' => $this->identifiers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'names' => $this->names instanceof AbstractTransfer ? $this->names->toArray(true, false) : $this->names,
            'identifiers' => $this->identifiers instanceof AbstractTransfer ? $this->identifiers->toArray(true, false) : $this->identifiers,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'names' => $this->names instanceof AbstractTransfer ? $this->names->toArray(true, true) : $this->names,
            'identifiers' => $this->identifiers instanceof AbstractTransfer ? $this->identifiers->toArray(true, true) : $this->identifiers,
        ];
    }
}
