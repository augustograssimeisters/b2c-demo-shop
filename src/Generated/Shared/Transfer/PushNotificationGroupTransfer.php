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
class PushNotificationGroupTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const IDENTIFIER = 'identifier';

    /**
     * @var string
     */
    public const ID_PUSH_NOTIFICATION_GROUP = 'idPushNotificationGroup';

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $identifier;

    /**
     * @var int|null
     */
    protected $idPushNotificationGroup;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'name' => 'name',
        'Name' => 'name',
        'identifier' => 'identifier',
        'Identifier' => 'identifier',
        'id_push_notification_group' => 'idPushNotificationGroup',
        'idPushNotificationGroup' => 'idPushNotificationGroup',
        'IdPushNotificationGroup' => 'idPushNotificationGroup',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ID_PUSH_NOTIFICATION_GROUP => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_push_notification_group',
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
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName(?string $name = null)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @param string $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail(string $name)
    {
        return $this->setName($name);
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail(): string
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @param string|null $identifier
     *
     * @return $this
     */
    public function setIdentifier(?string $identifier = null)
    {
        $this->identifier = $identifier;
        $this->modifiedProperties[self::IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @return string|null
     */
    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @param string $identifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdentifierOrFail(string $identifier)
    {
        return $this->setIdentifier($identifier);
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdentifierOrFail(): string
    {
        if ($this->identifier === null) {
            $this->throwNullValueException(static::IDENTIFIER);
        }

        return $this->identifier;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdentifier()
    {
        $this->assertPropertyIsSet(self::IDENTIFIER);

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param int|null $idPushNotificationGroup
     *
     * @return $this
     */
    public function setIdPushNotificationGroup(?int $idPushNotificationGroup = null)
    {
        $this->idPushNotificationGroup = $idPushNotificationGroup;
        $this->modifiedProperties[self::ID_PUSH_NOTIFICATION_GROUP] = true;

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @return int|null
     */
    public function getIdPushNotificationGroup(): ?int
    {
        return $this->idPushNotificationGroup;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param int $idPushNotificationGroup
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPushNotificationGroupOrFail(int $idPushNotificationGroup)
    {
        return $this->setIdPushNotificationGroup($idPushNotificationGroup);
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdPushNotificationGroupOrFail(): int
    {
        if ($this->idPushNotificationGroup === null) {
            $this->throwNullValueException(static::ID_PUSH_NOTIFICATION_GROUP);
        }

        return $this->idPushNotificationGroup;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPushNotificationGroup()
    {
        $this->assertPropertyIsSet(self::ID_PUSH_NOTIFICATION_GROUP);

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
                case 'name':
                case 'identifier':
                case 'idPushNotificationGroup':
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
                case 'name':
                case 'identifier':
                case 'idPushNotificationGroup':
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
                case 'name':
                case 'identifier':
                case 'idPushNotificationGroup':
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
            'name' => $this->name,
            'identifier' => $this->identifier,
            'idPushNotificationGroup' => $this->idPushNotificationGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name,
            'identifier' => $this->identifier,
            'id_push_notification_group' => $this->idPushNotificationGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, false) : $this->identifier,
            'id_push_notification_group' => $this->idPushNotificationGroup instanceof AbstractTransfer ? $this->idPushNotificationGroup->toArray(true, false) : $this->idPushNotificationGroup,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, true) : $this->identifier,
            'idPushNotificationGroup' => $this->idPushNotificationGroup instanceof AbstractTransfer ? $this->idPushNotificationGroup->toArray(true, true) : $this->idPushNotificationGroup,
        ];
    }
}
