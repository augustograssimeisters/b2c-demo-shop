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
class TaxAppConfigTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const APPLICATION_ID = 'applicationId';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const API_URLS = 'apiUrls';

    /**
     * @var string
     */
    public const VENDOR_CODE = 'vendorCode';

    /**
     * @var string
     */
    public const STORE_REFERENCE = 'storeReference';

    /**
     * @deprecated Will be removed in next major.
     */
    public const TENANT_IDENTIFIER = 'tenantIdentifier';

    /**
     * @var string|null
     */
    protected $applicationId;

    /**
     * @var bool|null
     */
    protected $isActive;

    /**
     * @var \Generated\Shared\Transfer\TaxAppApiUrlsTransfer|null
     */
    protected $apiUrls;

    /**
     * @var string|null
     */
    protected $vendorCode;

    /**
     * @var string|null
     */
    protected $storeReference;

    /**
     * @var string|null
     */
    protected $tenantIdentifier;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'application_id' => 'applicationId',
        'applicationId' => 'applicationId',
        'ApplicationId' => 'applicationId',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'api_urls' => 'apiUrls',
        'apiUrls' => 'apiUrls',
        'ApiUrls' => 'apiUrls',
        'vendor_code' => 'vendorCode',
        'vendorCode' => 'vendorCode',
        'VendorCode' => 'vendorCode',
        'store_reference' => 'storeReference',
        'storeReference' => 'storeReference',
        'StoreReference' => 'storeReference',
        'tenant_identifier' => 'tenantIdentifier',
        'tenantIdentifier' => 'tenantIdentifier',
        'TenantIdentifier' => 'tenantIdentifier',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::APPLICATION_ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'application_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
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
        self::API_URLS => [
            'type' => 'Generated\Shared\Transfer\TaxAppApiUrlsTransfer',
            'type_shim' => null,
            'name_underscore' => 'api_urls',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::VENDOR_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'vendor_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::STORE_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::TENANT_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'tenant_identifier',
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
     * @module TaxApp
     *
     * @param string|null $applicationId
     *
     * @return $this
     */
    public function setApplicationId(?string $applicationId = null)
    {
        $this->applicationId = $applicationId;
        $this->modifiedProperties[self::APPLICATION_ID] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string|null
     */
    public function getApplicationId(): ?string
    {
        return $this->applicationId;
    }

    /**
     * @module TaxApp
     *
     * @param string $applicationId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setApplicationIdOrFail(string $applicationId)
    {
        return $this->setApplicationId($applicationId);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getApplicationIdOrFail(): string
    {
        if ($this->applicationId === null) {
            $this->throwNullValueException(static::APPLICATION_ID);
        }

        return $this->applicationId;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApplicationId()
    {
        $this->assertPropertyIsSet(self::APPLICATION_ID);

        return $this;
    }

    /**
     * @module TaxApp
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
     * @module TaxApp
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    /**
     * @module TaxApp
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
     * @module TaxApp
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
     * @module TaxApp
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
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\TaxAppApiUrlsTransfer|null $apiUrls
     *
     * @return $this
     */
    public function setApiUrls(?TaxAppApiUrlsTransfer $apiUrls = null)
    {
        $this->apiUrls = $apiUrls;
        $this->modifiedProperties[self::API_URLS] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return \Generated\Shared\Transfer\TaxAppApiUrlsTransfer|null
     */
    public function getApiUrls(): ?TaxAppApiUrlsTransfer
    {
        return $this->apiUrls;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\TaxAppApiUrlsTransfer $apiUrls
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setApiUrlsOrFail(TaxAppApiUrlsTransfer $apiUrls)
    {
        return $this->setApiUrls($apiUrls);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\TaxAppApiUrlsTransfer
     */
    public function getApiUrlsOrFail(): TaxAppApiUrlsTransfer
    {
        if ($this->apiUrls === null) {
            $this->throwNullValueException(static::API_URLS);
        }

        return $this->apiUrls;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApiUrls()
    {
        $this->assertPropertyIsSet(self::API_URLS);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param string|null $vendorCode
     *
     * @return $this
     */
    public function setVendorCode(?string $vendorCode = null)
    {
        $this->vendorCode = $vendorCode;
        $this->modifiedProperties[self::VENDOR_CODE] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string|null
     */
    public function getVendorCode(): ?string
    {
        return $this->vendorCode;
    }

    /**
     * @module TaxApp
     *
     * @param string $vendorCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVendorCodeOrFail(string $vendorCode)
    {
        return $this->setVendorCode($vendorCode);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getVendorCodeOrFail(): string
    {
        if ($this->vendorCode === null) {
            $this->throwNullValueException(static::VENDOR_CODE);
        }

        return $this->vendorCode;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireVendorCode()
    {
        $this->assertPropertyIsSet(self::VENDOR_CODE);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param string|null $storeReference
     *
     * @return $this
     */
    public function setStoreReference(?string $storeReference = null)
    {
        $this->storeReference = $storeReference;
        $this->modifiedProperties[self::STORE_REFERENCE] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string|null
     */
    public function getStoreReference(): ?string
    {
        return $this->storeReference;
    }

    /**
     * @module TaxApp
     *
     * @param string $storeReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreReferenceOrFail(string $storeReference)
    {
        return $this->setStoreReference($storeReference);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStoreReferenceOrFail(): string
    {
        if ($this->storeReference === null) {
            $this->throwNullValueException(static::STORE_REFERENCE);
        }

        return $this->storeReference;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreReference()
    {
        $this->assertPropertyIsSet(self::STORE_REFERENCE);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @deprecated Will be removed in next major.
     *
     * @param string|null $tenantIdentifier
     *
     * @return $this
     */
    public function setTenantIdentifier(?string $tenantIdentifier = null)
    {
        $this->tenantIdentifier = $tenantIdentifier;
        $this->modifiedProperties[self::TENANT_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @deprecated Will be removed in next major.
     *
     * @return string|null
     */
    public function getTenantIdentifier(): ?string
    {
        return $this->tenantIdentifier;
    }

    /**
     * @module TaxApp
     *
     * @deprecated Will be removed in next major.
     *
     * @param string $tenantIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTenantIdentifierOrFail(string $tenantIdentifier)
    {
        return $this->setTenantIdentifier($tenantIdentifier);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Will be removed in next major.
     *
     * @return string
     */
    public function getTenantIdentifierOrFail(): string
    {
        if ($this->tenantIdentifier === null) {
            $this->throwNullValueException(static::TENANT_IDENTIFIER);
        }

        return $this->tenantIdentifier;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be removed in next major.
     *
     * @return $this
     */
    public function requireTenantIdentifier()
    {
        $this->assertPropertyIsSet(self::TENANT_IDENTIFIER);

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
                case 'applicationId':
                case 'isActive':
                case 'vendorCode':
                case 'storeReference':
                case 'tenantIdentifier':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'apiUrls':
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
                case 'applicationId':
                case 'isActive':
                case 'vendorCode':
                case 'storeReference':
                case 'tenantIdentifier':
                    $values[$arrayKey] = $value;

                    break;
                case 'apiUrls':
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
                case 'applicationId':
                case 'isActive':
                case 'vendorCode':
                case 'storeReference':
                case 'tenantIdentifier':
                    $values[$arrayKey] = $value;

                    break;
                case 'apiUrls':
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
            'applicationId' => $this->applicationId,
            'isActive' => $this->isActive,
            'vendorCode' => $this->vendorCode,
            'storeReference' => $this->storeReference,
            'tenantIdentifier' => $this->tenantIdentifier,
            'apiUrls' => $this->apiUrls,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'application_id' => $this->applicationId,
            'is_active' => $this->isActive,
            'vendor_code' => $this->vendorCode,
            'store_reference' => $this->storeReference,
            'tenant_identifier' => $this->tenantIdentifier,
            'api_urls' => $this->apiUrls,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'application_id' => $this->applicationId instanceof AbstractTransfer ? $this->applicationId->toArray(true, false) : $this->applicationId,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'vendor_code' => $this->vendorCode instanceof AbstractTransfer ? $this->vendorCode->toArray(true, false) : $this->vendorCode,
            'store_reference' => $this->storeReference instanceof AbstractTransfer ? $this->storeReference->toArray(true, false) : $this->storeReference,
            'tenant_identifier' => $this->tenantIdentifier instanceof AbstractTransfer ? $this->tenantIdentifier->toArray(true, false) : $this->tenantIdentifier,
            'api_urls' => $this->apiUrls instanceof AbstractTransfer ? $this->apiUrls->toArray(true, false) : $this->apiUrls,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'applicationId' => $this->applicationId instanceof AbstractTransfer ? $this->applicationId->toArray(true, true) : $this->applicationId,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'vendorCode' => $this->vendorCode instanceof AbstractTransfer ? $this->vendorCode->toArray(true, true) : $this->vendorCode,
            'storeReference' => $this->storeReference instanceof AbstractTransfer ? $this->storeReference->toArray(true, true) : $this->storeReference,
            'tenantIdentifier' => $this->tenantIdentifier instanceof AbstractTransfer ? $this->tenantIdentifier->toArray(true, true) : $this->tenantIdentifier,
            'apiUrls' => $this->apiUrls instanceof AbstractTransfer ? $this->apiUrls->toArray(true, true) : $this->apiUrls,
        ];
    }
}
