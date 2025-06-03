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
class PushNotificationSubscriptionTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const USER = 'user';

    /**
     * @var string
     */
    public const GROUP = 'group';

    /**
     * @var string
     */
    public const ID_PUSH_NOTIFICATION_SUBSCRIPTION = 'idPushNotificationSubscription';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const PROVIDER = 'provider';

    /**
     * @var string
     */
    public const DELIVERY_LOGS = 'deliveryLogs';

    /**
     * @var string
     */
    public const PAYLOAD = 'payload';

    /**
     * @var string
     */
    public const PAYLOAD_CHECK_SUM = 'payloadCheckSum';

    /**
     * @var string
     */
    public const EXPIRED_AT = 'expiredAt';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var \Generated\Shared\Transfer\PushNotificationUserTransfer|null
     */
    protected $user;

    /**
     * @var \Generated\Shared\Transfer\PushNotificationGroupTransfer|null
     */
    protected $group;

    /**
     * @var int|null
     */
    protected $idPushNotificationSubscription;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \Generated\Shared\Transfer\PushNotificationProviderTransfer|null
     */
    protected $provider;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\PushNotificationSubscriptionDeliveryLogTransfer>
     */
    protected $deliveryLogs;

    /**
     * @var array
     */
    protected $payload = [];

    /**
     * @var string|null
     */
    protected $payloadCheckSum;

    /**
     * @var string|null
     */
    protected $expiredAt;

    /**
     * @var \Generated\Shared\Transfer\LocaleTransfer|null
     */
    protected $locale;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'user' => 'user',
        'User' => 'user',
        'group' => 'group',
        'Group' => 'group',
        'id_push_notification_subscription' => 'idPushNotificationSubscription',
        'idPushNotificationSubscription' => 'idPushNotificationSubscription',
        'IdPushNotificationSubscription' => 'idPushNotificationSubscription',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'provider' => 'provider',
        'Provider' => 'provider',
        'delivery_logs' => 'deliveryLogs',
        'deliveryLogs' => 'deliveryLogs',
        'DeliveryLogs' => 'deliveryLogs',
        'payload' => 'payload',
        'Payload' => 'payload',
        'payload_check_sum' => 'payloadCheckSum',
        'payloadCheckSum' => 'payloadCheckSum',
        'PayloadCheckSum' => 'payloadCheckSum',
        'expired_at' => 'expiredAt',
        'expiredAt' => 'expiredAt',
        'ExpiredAt' => 'expiredAt',
        'locale' => 'locale',
        'Locale' => 'locale',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::USER => [
            'type' => 'Generated\Shared\Transfer\PushNotificationUserTransfer',
            'type_shim' => null,
            'name_underscore' => 'user',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::GROUP => [
            'type' => 'Generated\Shared\Transfer\PushNotificationGroupTransfer',
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
        self::ID_PUSH_NOTIFICATION_SUBSCRIPTION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_push_notification_subscription',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::PROVIDER => [
            'type' => 'Generated\Shared\Transfer\PushNotificationProviderTransfer',
            'type_shim' => null,
            'name_underscore' => 'provider',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::DELIVERY_LOGS => [
            'type' => 'Generated\Shared\Transfer\PushNotificationSubscriptionDeliveryLogTransfer',
            'type_shim' => null,
            'name_underscore' => 'delivery_logs',
            'is_collection' => true,
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
        self::PAYLOAD_CHECK_SUM => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'payload_check_sum',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::EXPIRED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'expired_at',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::LOCALE => [
            'type' => 'Generated\Shared\Transfer\LocaleTransfer',
            'type_shim' => null,
            'name_underscore' => 'locale',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module PickingListPushNotification|PushNotification|PushNotificationsBackendApi
     *
     * @param \Generated\Shared\Transfer\PushNotificationUserTransfer|null $user
     *
     * @return $this
     */
    public function setUser(?PushNotificationUserTransfer $user = null)
    {
        $this->user = $user;
        $this->modifiedProperties[self::USER] = true;

        return $this;
    }

    /**
     * @module PickingListPushNotification|PushNotification|PushNotificationsBackendApi
     *
     * @return \Generated\Shared\Transfer\PushNotificationUserTransfer|null
     */
    public function getUser(): ?PushNotificationUserTransfer
    {
        return $this->user;
    }

    /**
     * @module PickingListPushNotification|PushNotification|PushNotificationsBackendApi
     *
     * @param \Generated\Shared\Transfer\PushNotificationUserTransfer $user
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUserOrFail(PushNotificationUserTransfer $user)
    {
        return $this->setUser($user);
    }

    /**
     * @module PickingListPushNotification|PushNotification|PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PushNotificationUserTransfer
     */
    public function getUserOrFail(): PushNotificationUserTransfer
    {
        if ($this->user === null) {
            $this->throwNullValueException(static::USER);
        }

        return $this->user;
    }

    /**
     * @module PickingListPushNotification|PushNotification|PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUser()
    {
        $this->assertPropertyIsSet(self::USER);

        return $this;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @param \Generated\Shared\Transfer\PushNotificationGroupTransfer|null $group
     *
     * @return $this
     */
    public function setGroup(?PushNotificationGroupTransfer $group = null)
    {
        $this->group = $group;
        $this->modifiedProperties[self::GROUP] = true;

        return $this;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @return \Generated\Shared\Transfer\PushNotificationGroupTransfer|null
     */
    public function getGroup(): ?PushNotificationGroupTransfer
    {
        return $this->group;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @param \Generated\Shared\Transfer\PushNotificationGroupTransfer $group
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGroupOrFail(PushNotificationGroupTransfer $group)
    {
        return $this->setGroup($group);
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PushNotificationGroupTransfer
     */
    public function getGroupOrFail(): PushNotificationGroupTransfer
    {
        if ($this->group === null) {
            $this->throwNullValueException(static::GROUP);
        }

        return $this->group;
    }

    /**
     * @module PickingListPushNotification|PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
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
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param int|null $idPushNotificationSubscription
     *
     * @return $this
     */
    public function setIdPushNotificationSubscription(?int $idPushNotificationSubscription = null)
    {
        $this->idPushNotificationSubscription = $idPushNotificationSubscription;
        $this->modifiedProperties[self::ID_PUSH_NOTIFICATION_SUBSCRIPTION] = true;

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @return int|null
     */
    public function getIdPushNotificationSubscription(): ?int
    {
        return $this->idPushNotificationSubscription;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param int $idPushNotificationSubscription
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPushNotificationSubscriptionOrFail(int $idPushNotificationSubscription)
    {
        return $this->setIdPushNotificationSubscription($idPushNotificationSubscription);
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdPushNotificationSubscriptionOrFail(): int
    {
        if ($this->idPushNotificationSubscription === null) {
            $this->throwNullValueException(static::ID_PUSH_NOTIFICATION_SUBSCRIPTION);
        }

        return $this->idPushNotificationSubscription;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPushNotificationSubscription()
    {
        $this->assertPropertyIsSet(self::ID_PUSH_NOTIFICATION_SUBSCRIPTION);

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid(?string $uuid = null)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @return string|null
     */
    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @param string $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail(string $uuid)
    {
        return $this->setUuid($uuid);
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail(): string
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireUuid()
    {
        $this->assertPropertyIsSet(self::UUID);

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @param \Generated\Shared\Transfer\PushNotificationProviderTransfer|null $provider
     *
     * @return $this
     */
    public function setProvider(?PushNotificationProviderTransfer $provider = null)
    {
        $this->provider = $provider;
        $this->modifiedProperties[self::PROVIDER] = true;

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @return \Generated\Shared\Transfer\PushNotificationProviderTransfer|null
     */
    public function getProvider(): ?PushNotificationProviderTransfer
    {
        return $this->provider;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @param \Generated\Shared\Transfer\PushNotificationProviderTransfer $provider
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProviderOrFail(PushNotificationProviderTransfer $provider)
    {
        return $this->setProvider($provider);
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PushNotificationProviderTransfer
     */
    public function getProviderOrFail(): PushNotificationProviderTransfer
    {
        if ($this->provider === null) {
            $this->throwNullValueException(static::PROVIDER);
        }

        return $this->provider;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProvider()
    {
        $this->assertPropertyIsSet(self::PROVIDER);

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\PushNotificationSubscriptionDeliveryLogTransfer> $deliveryLogs
     *
     * @return $this
     */
    public function setDeliveryLogs(ArrayObject $deliveryLogs)
    {
        $this->deliveryLogs = new ArrayObject();

        foreach ($deliveryLogs as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::DELIVERY_LOGS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addDeliveryLog(...$args);
        }

        $this->modifiedProperties[self::DELIVERY_LOGS] = true;

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\PushNotificationSubscriptionDeliveryLogTransfer>
     */
    public function getDeliveryLogs(): ArrayObject
    {
        return $this->deliveryLogs;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @param \Generated\Shared\Transfer\PushNotificationSubscriptionDeliveryLogTransfer $deliveryLog
     *
     * @return $this
     */
    public function addDeliveryLog(PushNotificationSubscriptionDeliveryLogTransfer $deliveryLog)
    {
        $this->deliveryLogs[] = $deliveryLog;
        $this->modifiedProperties[self::DELIVERY_LOGS] = true;

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDeliveryLogs()
    {
        $this->assertCollectionPropertyIsSet(self::DELIVERY_LOGS);

        return $this;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
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
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
     *
     * @return array
     */
    public function getPayload(): array
    {
        return $this->payload;
    }

    /**
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
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
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
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
     * @module PushNotificationWebPushPhp|PushNotification|PushNotificationsBackendApi
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
     * @module PushNotification
     *
     * @param string|null $payloadCheckSum
     *
     * @return $this
     */
    public function setPayloadCheckSum(?string $payloadCheckSum = null)
    {
        $this->payloadCheckSum = $payloadCheckSum;
        $this->modifiedProperties[self::PAYLOAD_CHECK_SUM] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @return string|null
     */
    public function getPayloadCheckSum(): ?string
    {
        return $this->payloadCheckSum;
    }

    /**
     * @module PushNotification
     *
     * @param string $payloadCheckSum
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPayloadCheckSumOrFail(string $payloadCheckSum)
    {
        return $this->setPayloadCheckSum($payloadCheckSum);
    }

    /**
     * @module PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPayloadCheckSumOrFail(): string
    {
        if ($this->payloadCheckSum === null) {
            $this->throwNullValueException(static::PAYLOAD_CHECK_SUM);
        }

        return $this->payloadCheckSum;
    }

    /**
     * @module PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePayloadCheckSum()
    {
        $this->assertPropertyIsSet(self::PAYLOAD_CHECK_SUM);

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @param string|null $expiredAt
     *
     * @return $this
     */
    public function setExpiredAt(?string $expiredAt = null)
    {
        $this->expiredAt = $expiredAt;
        $this->modifiedProperties[self::EXPIRED_AT] = true;

        return $this;
    }

    /**
     * @module PushNotification
     *
     * @return string|null
     */
    public function getExpiredAt(): ?string
    {
        return $this->expiredAt;
    }

    /**
     * @module PushNotification
     *
     * @param string $expiredAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setExpiredAtOrFail(string $expiredAt)
    {
        return $this->setExpiredAt($expiredAt);
    }

    /**
     * @module PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getExpiredAtOrFail(): string
    {
        if ($this->expiredAt === null) {
            $this->throwNullValueException(static::EXPIRED_AT);
        }

        return $this->expiredAt;
    }

    /**
     * @module PushNotification
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireExpiredAt()
    {
        $this->assertPropertyIsSet(self::EXPIRED_AT);

        return $this;
    }

    /**
     * @module PushNotification|PushNotificationsBackendApi
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer|null $locale
     *
     * @return $this
     */
    public function setLocale(?LocaleTransfer $locale = null)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module PushNotification|PushNotificationsBackendApi
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer|null
     */
    public function getLocale(): ?LocaleTransfer
    {
        return $this->locale;
    }

    /**
     * @module PushNotification|PushNotificationsBackendApi
     *
     * @param \Generated\Shared\Transfer\LocaleTransfer $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail(LocaleTransfer $locale)
    {
        return $this->setLocale($locale);
    }

    /**
     * @module PushNotification|PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\LocaleTransfer
     */
    public function getLocaleOrFail(): LocaleTransfer
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module PushNotification|PushNotificationsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

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
                case 'idPushNotificationSubscription':
                case 'uuid':
                case 'payload':
                case 'payloadCheckSum':
                case 'expiredAt':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'user':
                case 'group':
                case 'provider':
                case 'locale':
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
                case 'deliveryLogs':
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
                case 'idPushNotificationSubscription':
                case 'uuid':
                case 'payload':
                case 'payloadCheckSum':
                case 'expiredAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'user':
                case 'group':
                case 'provider':
                case 'locale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'deliveryLogs':
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
                case 'idPushNotificationSubscription':
                case 'uuid':
                case 'payload':
                case 'payloadCheckSum':
                case 'expiredAt':
                    $values[$arrayKey] = $value;

                    break;
                case 'user':
                case 'group':
                case 'provider':
                case 'locale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'deliveryLogs':
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
        $this->deliveryLogs = $this->deliveryLogs ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idPushNotificationSubscription' => $this->idPushNotificationSubscription,
            'uuid' => $this->uuid,
            'payload' => $this->payload,
            'payloadCheckSum' => $this->payloadCheckSum,
            'expiredAt' => $this->expiredAt,
            'user' => $this->user,
            'group' => $this->group,
            'provider' => $this->provider,
            'locale' => $this->locale,
            'deliveryLogs' => $this->deliveryLogs,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_push_notification_subscription' => $this->idPushNotificationSubscription,
            'uuid' => $this->uuid,
            'payload' => $this->payload,
            'payload_check_sum' => $this->payloadCheckSum,
            'expired_at' => $this->expiredAt,
            'user' => $this->user,
            'group' => $this->group,
            'provider' => $this->provider,
            'locale' => $this->locale,
            'delivery_logs' => $this->deliveryLogs,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_push_notification_subscription' => $this->idPushNotificationSubscription instanceof AbstractTransfer ? $this->idPushNotificationSubscription->toArray(true, false) : $this->idPushNotificationSubscription,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'payload' => $this->payload instanceof AbstractTransfer ? $this->payload->toArray(true, false) : $this->payload,
            'payload_check_sum' => $this->payloadCheckSum instanceof AbstractTransfer ? $this->payloadCheckSum->toArray(true, false) : $this->payloadCheckSum,
            'expired_at' => $this->expiredAt instanceof AbstractTransfer ? $this->expiredAt->toArray(true, false) : $this->expiredAt,
            'user' => $this->user instanceof AbstractTransfer ? $this->user->toArray(true, false) : $this->user,
            'group' => $this->group instanceof AbstractTransfer ? $this->group->toArray(true, false) : $this->group,
            'provider' => $this->provider instanceof AbstractTransfer ? $this->provider->toArray(true, false) : $this->provider,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'delivery_logs' => $this->deliveryLogs instanceof AbstractTransfer ? $this->deliveryLogs->toArray(true, false) : $this->addValuesToCollection($this->deliveryLogs, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPushNotificationSubscription' => $this->idPushNotificationSubscription instanceof AbstractTransfer ? $this->idPushNotificationSubscription->toArray(true, true) : $this->idPushNotificationSubscription,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'payload' => $this->payload instanceof AbstractTransfer ? $this->payload->toArray(true, true) : $this->payload,
            'payloadCheckSum' => $this->payloadCheckSum instanceof AbstractTransfer ? $this->payloadCheckSum->toArray(true, true) : $this->payloadCheckSum,
            'expiredAt' => $this->expiredAt instanceof AbstractTransfer ? $this->expiredAt->toArray(true, true) : $this->expiredAt,
            'user' => $this->user instanceof AbstractTransfer ? $this->user->toArray(true, true) : $this->user,
            'group' => $this->group instanceof AbstractTransfer ? $this->group->toArray(true, true) : $this->group,
            'provider' => $this->provider instanceof AbstractTransfer ? $this->provider->toArray(true, true) : $this->provider,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'deliveryLogs' => $this->deliveryLogs instanceof AbstractTransfer ? $this->deliveryLogs->toArray(true, true) : $this->addValuesToCollection($this->deliveryLogs, true, true),
        ];
    }
}
