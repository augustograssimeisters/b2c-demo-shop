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
class PushNotificationSubscriptionsBackendApiAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PROVIDER_NAME = 'providerName';

    /**
     * @var string
     */
    public const GROUP = 'group';

    /**
     * @var string
     */
    public const PAYLOAD = 'payload';

    /**
     * @var string
     */
    public const LOCALE_NAME = 'localeName';

    /**
     * @var string|null
     */
    protected $providerName;

    /**
     * @var \Generated\Shared\Transfer\PushNotificationGroupsBackendApiAttributesTransfer|null
     */
    protected $group;

    /**
     * @var array
     */
    protected $payload = [];

    /**
     * @var string|null
     */
    protected $localeName;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'provider_name' => 'providerName',
        'providerName' => 'providerName',
        'ProviderName' => 'providerName',
        'group' => 'group',
        'Group' => 'group',
        'payload' => 'payload',
        'Payload' => 'payload',
        'locale_name' => 'localeName',
        'localeName' => 'localeName',
        'LocaleName' => 'localeName',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PROVIDER_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'provider_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::GROUP => [
            'type' => 'Generated\Shared\Transfer\PushNotificationGroupsBackendApiAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'group',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::PAYLOAD => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'payload',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::LOCALE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale_name',
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
     * @module PushNotificationsBackendApi
     *
     * @param string|null $providerName
     *
     * @return $this
     */
    public function setProviderName(?string $providerName = null)
    {
        $this->providerName = $providerName;
        $this->modifiedProperties[self::PROVIDER_NAME] = true;

        return $this;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @return string|null
     */
    public function getProviderName(): ?string
    {
        return $this->providerName;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @param string $providerName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProviderNameOrFail(string $providerName)
    {
        return $this->setProviderName($providerName);
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProviderNameOrFail(): string
    {
        if ($this->providerName === null) {
            $this->throwNullValueException(static::PROVIDER_NAME);
        }

        return $this->providerName;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProviderName()
    {
        $this->assertPropertyIsSet(self::PROVIDER_NAME);

        return $this;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @param \Generated\Shared\Transfer\PushNotificationGroupsBackendApiAttributesTransfer|null $group
     *
     * @return $this
     */
    public function setGroup(?PushNotificationGroupsBackendApiAttributesTransfer $group = null)
    {
        $this->group = $group;
        $this->modifiedProperties[self::GROUP] = true;

        return $this;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @return \Generated\Shared\Transfer\PushNotificationGroupsBackendApiAttributesTransfer|null
     */
    public function getGroup(): ?PushNotificationGroupsBackendApiAttributesTransfer
    {
        return $this->group;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @param \Generated\Shared\Transfer\PushNotificationGroupsBackendApiAttributesTransfer $group
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGroupOrFail(PushNotificationGroupsBackendApiAttributesTransfer $group)
    {
        return $this->setGroup($group);
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PushNotificationGroupsBackendApiAttributesTransfer
     */
    public function getGroupOrFail(): PushNotificationGroupsBackendApiAttributesTransfer
    {
        if ($this->group === null) {
            $this->throwNullValueException(static::GROUP);
        }

        return $this->group;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGroup()
    {
        $this->assertPropertyIsSet(self::GROUP);

        return $this;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @param array|null $payload
     *
     * @return $this
     */
    public function setPayload(array $payload = null)
    {
        if ($payload === null) {
            $payload = [];
        }

        $this->payload = $payload;
        $this->modifiedProperties[self::PAYLOAD] = true;

        return $this;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @return array
     */
    public function getPayload(): array
    {
        return $this->payload;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @param string|int $payloadItemKey
     * @param mixed $payloadItemValue
     *
     * @return $this
     */
    public function addPayloadItem($payloadItemKey, $payloadItemValue)
    {
        $this->payload[$payloadItemKey] = $payloadItemValue;
        $this->modifiedProperties[self::PAYLOAD] = true;

        return $this;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePayload()
    {
        $this->assertPropertyIsSet(self::PAYLOAD);

        return $this;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @param string|int $key
     *
     * @return mixed
     */
    public function getPayloadItem($key)
    {
        return $this->payload[$key];
    }


    /**
     * @module PushNotificationsBackendApi
     *
     * @param string|null $localeName
     *
     * @return $this
     */
    public function setLocaleName(?string $localeName = null)
    {
        $this->localeName = $localeName;
        $this->modifiedProperties[self::LOCALE_NAME] = true;

        return $this;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @return string|null
     */
    public function getLocaleName(): ?string
    {
        return $this->localeName;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @param string $localeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleNameOrFail(string $localeName)
    {
        return $this->setLocaleName($localeName);
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleNameOrFail(): string
    {
        if ($this->localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->localeName;
    }

    /**
     * @module PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocaleName()
    {
        $this->assertPropertyIsSet(self::LOCALE_NAME);

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
                case 'providerName':
                case 'payload':
                case 'localeName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'group':
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
                case 'providerName':
                case 'payload':
                case 'localeName':
                    $values[$arrayKey] = $value;

                    break;
                case 'group':
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
                case 'providerName':
                case 'payload':
                case 'localeName':
                    $values[$arrayKey] = $value;

                    break;
                case 'group':
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
            'providerName' => $this->providerName,
            'payload' => $this->payload,
            'localeName' => $this->localeName,
            'group' => $this->group,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'provider_name' => $this->providerName,
            'payload' => $this->payload,
            'locale_name' => $this->localeName,
            'group' => $this->group,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'provider_name' => $this->providerName instanceof AbstractTransfer ? $this->providerName->toArray(true, false) : $this->providerName,
            'payload' => $this->payload instanceof AbstractTransfer ? $this->payload->toArray(true, false) : $this->payload,
            'locale_name' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, false) : $this->localeName,
            'group' => $this->group instanceof AbstractTransfer ? $this->group->toArray(true, false) : $this->group,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'providerName' => $this->providerName instanceof AbstractTransfer ? $this->providerName->toArray(true, true) : $this->providerName,
            'payload' => $this->payload instanceof AbstractTransfer ? $this->payload->toArray(true, true) : $this->payload,
            'localeName' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, true) : $this->localeName,
            'group' => $this->group instanceof AbstractTransfer ? $this->group->toArray(true, true) : $this->group,
        ];
    }
}
