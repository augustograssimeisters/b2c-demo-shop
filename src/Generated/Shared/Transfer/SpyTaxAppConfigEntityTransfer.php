<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyTaxAppConfigEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_TAX_APP_CONFIG = 'idTaxAppConfig';

    /**
     * @var string
     */
    public const FK_STORE = 'fkStore';

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
    public const VENDOR_CODE = 'vendorCode';

    /**
     * @var string
     */
    public const API_URLS = 'apiUrls';

    /**
     * @var integer|null
     */
    protected $idTaxAppConfig;

    /**
     * @var integer|null
     */
    protected $fkStore;

    /**
     * @var string|null
     */
    protected $applicationId;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $vendorCode;

    /**
     * @var string|null
     */
    protected $apiUrls;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_tax_app_config' => 'idTaxAppConfig',
        'idTaxAppConfig' => 'idTaxAppConfig',
        'IdTaxAppConfig' => 'idTaxAppConfig',
        'fk_store' => 'fkStore',
        'fkStore' => 'fkStore',
        'FkStore' => 'fkStore',
        'application_id' => 'applicationId',
        'applicationId' => 'applicationId',
        'ApplicationId' => 'applicationId',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'vendor_code' => 'vendorCode',
        'vendorCode' => 'vendorCode',
        'VendorCode' => 'vendorCode',
        'api_urls' => 'apiUrls',
        'apiUrls' => 'apiUrls',
        'ApiUrls' => 'apiUrls',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_TAX_APP_CONFIG => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_tax_app_config',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_STORE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_store',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
            'is_strict' => false,
        ],
        self::IS_ACTIVE => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'is_active',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
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
            'is_strict' => false,
        ],
        self::API_URLS => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'api_urls',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];
    /**
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\TaxApp\Persistence\SpyTaxAppConfig';


    /**
     * @module 
     *
     * @param integer|null $idTaxAppConfig
     *
     * @return $this
     */
    public function setIdTaxAppConfig($idTaxAppConfig)
    {
        $this->idTaxAppConfig = $idTaxAppConfig;
        $this->modifiedProperties[self::ID_TAX_APP_CONFIG] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdTaxAppConfig()
    {
        return $this->idTaxAppConfig;
    }

    /**
     * @module 
     *
     * @param integer|null $idTaxAppConfig
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdTaxAppConfigOrFail($idTaxAppConfig)
    {
        if ($idTaxAppConfig === null) {
            $this->throwNullValueException(static::ID_TAX_APP_CONFIG);
        }

        return $this->setIdTaxAppConfig($idTaxAppConfig);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdTaxAppConfigOrFail()
    {
        if ($this->idTaxAppConfig === null) {
            $this->throwNullValueException(static::ID_TAX_APP_CONFIG);
        }

        return $this->idTaxAppConfig;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdTaxAppConfig()
    {
        $this->assertPropertyIsSet(self::ID_TAX_APP_CONFIG);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStore
     *
     * @return $this
     */
    public function setFkStore($fkStore)
    {
        $this->fkStore = $fkStore;
        $this->modifiedProperties[self::FK_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkStore()
    {
        return $this->fkStore;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkStoreOrFail($fkStore)
    {
        if ($fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->setFkStore($fkStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkStoreOrFail()
    {
        if ($this->fkStore === null) {
            $this->throwNullValueException(static::FK_STORE);
        }

        return $this->fkStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkStore()
    {
        $this->assertPropertyIsSet(self::FK_STORE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $applicationId
     *
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
        $this->modifiedProperties[self::APPLICATION_ID] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * @module 
     *
     * @param string|null $applicationId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setApplicationIdOrFail($applicationId)
    {
        if ($applicationId === null) {
            $this->throwNullValueException(static::APPLICATION_ID);
        }

        return $this->setApplicationId($applicationId);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getApplicationIdOrFail()
    {
        if ($this->applicationId === null) {
            $this->throwNullValueException(static::APPLICATION_ID);
        }

        return $this->applicationId;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        $this->modifiedProperties[self::IS_ACTIVE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @module 
     *
     * @param boolean|null $isActive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsActiveOrFail($isActive)
    {
        if ($isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->setIsActive($isActive);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getIsActiveOrFail()
    {
        if ($this->isActive === null) {
            $this->throwNullValueException(static::IS_ACTIVE);
        }

        return $this->isActive;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $vendorCode
     *
     * @return $this
     */
    public function setVendorCode($vendorCode)
    {
        $this->vendorCode = $vendorCode;
        $this->modifiedProperties[self::VENDOR_CODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * @module 
     *
     * @param string|null $vendorCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setVendorCodeOrFail($vendorCode)
    {
        if ($vendorCode === null) {
            $this->throwNullValueException(static::VENDOR_CODE);
        }

        return $this->setVendorCode($vendorCode);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getVendorCodeOrFail()
    {
        if ($this->vendorCode === null) {
            $this->throwNullValueException(static::VENDOR_CODE);
        }

        return $this->vendorCode;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param string|null $apiUrls
     *
     * @return $this
     */
    public function setApiUrls($apiUrls)
    {
        $this->apiUrls = $apiUrls;
        $this->modifiedProperties[self::API_URLS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getApiUrls()
    {
        return $this->apiUrls;
    }

    /**
     * @module 
     *
     * @param string|null $apiUrls
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setApiUrlsOrFail($apiUrls)
    {
        if ($apiUrls === null) {
            $this->throwNullValueException(static::API_URLS);
        }

        return $this->setApiUrls($apiUrls);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getApiUrlsOrFail()
    {
        if ($this->apiUrls === null) {
            $this->throwNullValueException(static::API_URLS);
        }

        return $this->apiUrls;
    }

    /**
     * @module 
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
                case 'idTaxAppConfig':
                case 'fkStore':
                case 'applicationId':
                case 'isActive':
                case 'vendorCode':
                case 'apiUrls':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
                    $this->virtualProperties[$property] = $value;
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
                case 'idTaxAppConfig':
                case 'fkStore':
                case 'applicationId':
                case 'isActive':
                case 'vendorCode':
                case 'apiUrls':
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
                case 'idTaxAppConfig':
                case 'fkStore':
                case 'applicationId':
                case 'isActive':
                case 'vendorCode':
                case 'apiUrls':
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
            'idTaxAppConfig' => $this->idTaxAppConfig,
            'fkStore' => $this->fkStore,
            'applicationId' => $this->applicationId,
            'isActive' => $this->isActive,
            'vendorCode' => $this->vendorCode,
            'apiUrls' => $this->apiUrls,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_tax_app_config' => $this->idTaxAppConfig,
            'fk_store' => $this->fkStore,
            'application_id' => $this->applicationId,
            'is_active' => $this->isActive,
            'vendor_code' => $this->vendorCode,
            'api_urls' => $this->apiUrls,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_tax_app_config' => $this->idTaxAppConfig instanceof AbstractTransfer ? $this->idTaxAppConfig->toArray(true, false) : $this->idTaxAppConfig,
            'fk_store' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, false) : $this->fkStore,
            'application_id' => $this->applicationId instanceof AbstractTransfer ? $this->applicationId->toArray(true, false) : $this->applicationId,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'vendor_code' => $this->vendorCode instanceof AbstractTransfer ? $this->vendorCode->toArray(true, false) : $this->vendorCode,
            'api_urls' => $this->apiUrls instanceof AbstractTransfer ? $this->apiUrls->toArray(true, false) : $this->apiUrls,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idTaxAppConfig' => $this->idTaxAppConfig instanceof AbstractTransfer ? $this->idTaxAppConfig->toArray(true, true) : $this->idTaxAppConfig,
            'fkStore' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, true) : $this->fkStore,
            'applicationId' => $this->applicationId instanceof AbstractTransfer ? $this->applicationId->toArray(true, true) : $this->applicationId,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'vendorCode' => $this->vendorCode instanceof AbstractTransfer ? $this->vendorCode->toArray(true, true) : $this->vendorCode,
            'apiUrls' => $this->apiUrls instanceof AbstractTransfer ? $this->apiUrls->toArray(true, true) : $this->apiUrls,
        ];
    }
}
