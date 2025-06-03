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
class SpyQuoteEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_QUOTE = 'idQuote';

    /**
     * @var string
     */
    public const FK_STORE = 'fkStore';

    /**
     * @var string
     */
    public const CUSTOMER_REFERENCE = 'customerReference';

    /**
     * @var string
     */
    public const QUOTE_DATA = 'quoteData';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const SPY_STORE = 'spyStore';

    /**
     * @var integer|null
     */
    protected $idQuote;

    /**
     * @var integer|null
     */
    protected $fkStore;

    /**
     * @var string|null
     */
    protected $customerReference;

    /**
     * @var string|null
     */
    protected $quoteData;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    protected $spyStore;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_quote' => 'idQuote',
        'idQuote' => 'idQuote',
        'IdQuote' => 'idQuote',
        'fk_store' => 'fkStore',
        'fkStore' => 'fkStore',
        'FkStore' => 'fkStore',
        'customer_reference' => 'customerReference',
        'customerReference' => 'customerReference',
        'CustomerReference' => 'customerReference',
        'quote_data' => 'quoteData',
        'quoteData' => 'quoteData',
        'QuoteData' => 'quoteData',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'spy_store' => 'spyStore',
        'spyStore' => 'spyStore',
        'SpyStore' => 'spyStore',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_QUOTE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_quote',
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
        self::CUSTOMER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUOTE_DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'quote_data',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
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
            'is_strict' => false,
        ],
        self::SPY_STORE => [
            'type' => 'Generated\Shared\Transfer\SpyStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_store',
            'is_collection' => false,
            'is_transfer' => true,
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
    public static $entityNamespace = 'Orm\Zed\Quote\Persistence\SpyQuote';


    /**
     * @module 
     *
     * @param integer|null $idQuote
     *
     * @return $this
     */
    public function setIdQuote($idQuote)
    {
        $this->idQuote = $idQuote;
        $this->modifiedProperties[self::ID_QUOTE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdQuote()
    {
        return $this->idQuote;
    }

    /**
     * @module 
     *
     * @param integer|null $idQuote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdQuoteOrFail($idQuote)
    {
        if ($idQuote === null) {
            $this->throwNullValueException(static::ID_QUOTE);
        }

        return $this->setIdQuote($idQuote);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdQuoteOrFail()
    {
        if ($this->idQuote === null) {
            $this->throwNullValueException(static::ID_QUOTE);
        }

        return $this->idQuote;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdQuote()
    {
        $this->assertPropertyIsSet(self::ID_QUOTE);

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
     * @param string|null $customerReference
     *
     * @return $this
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
        $this->modifiedProperties[self::CUSTOMER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @module 
     *
     * @param string|null $customerReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerReferenceOrFail($customerReference)
    {
        if ($customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->setCustomerReference($customerReference);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerReferenceOrFail()
    {
        if ($this->customerReference === null) {
            $this->throwNullValueException(static::CUSTOMER_REFERENCE);
        }

        return $this->customerReference;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerReference()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_REFERENCE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $quoteData
     *
     * @return $this
     */
    public function setQuoteData($quoteData)
    {
        $this->quoteData = $quoteData;
        $this->modifiedProperties[self::QUOTE_DATA] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getQuoteData()
    {
        return $this->quoteData;
    }

    /**
     * @module 
     *
     * @param string|null $quoteData
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteDataOrFail($quoteData)
    {
        if ($quoteData === null) {
            $this->throwNullValueException(static::QUOTE_DATA);
        }

        return $this->setQuoteData($quoteData);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQuoteDataOrFail()
    {
        if ($this->quoteData === null) {
            $this->throwNullValueException(static::QUOTE_DATA);
        }

        return $this->quoteData;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuoteData()
    {
        $this->assertPropertyIsSet(self::QUOTE_DATA);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
        $this->modifiedProperties[self::UUID] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @module 
     *
     * @param string|null $uuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setUuidOrFail($uuid)
    {
        if ($uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->setUuid($uuid);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getUuidOrFail()
    {
        if ($this->uuid === null) {
            $this->throwNullValueException(static::UUID);
        }

        return $this->uuid;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer|null $spyStore
     *
     * @return $this
     */
    public function setSpyStore(SpyStoreEntityTransfer $spyStore = null)
    {
        $this->spyStore = $spyStore;
        $this->modifiedProperties[self::SPY_STORE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer|null
     */
    public function getSpyStore()
    {
        return $this->spyStore;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStoreEntityTransfer $spyStore
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyStoreOrFail(SpyStoreEntityTransfer $spyStore)
    {
        return $this->setSpyStore($spyStore);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyStoreEntityTransfer
     */
    public function getSpyStoreOrFail()
    {
        if ($this->spyStore === null) {
            $this->throwNullValueException(static::SPY_STORE);
        }

        return $this->spyStore;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyStore()
    {
        $this->assertPropertyIsSet(self::SPY_STORE);

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
                case 'idQuote':
                case 'fkStore':
                case 'customerReference':
                case 'quoteData':
                case 'uuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyStore':
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
                case 'idQuote':
                case 'fkStore':
                case 'customerReference':
                case 'quoteData':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyStore':
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
                case 'idQuote':
                case 'fkStore':
                case 'customerReference':
                case 'quoteData':
                case 'uuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyStore':
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
            'idQuote' => $this->idQuote,
            'fkStore' => $this->fkStore,
            'customerReference' => $this->customerReference,
            'quoteData' => $this->quoteData,
            'uuid' => $this->uuid,
            'spyStore' => $this->spyStore,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_quote' => $this->idQuote,
            'fk_store' => $this->fkStore,
            'customer_reference' => $this->customerReference,
            'quote_data' => $this->quoteData,
            'uuid' => $this->uuid,
            'spy_store' => $this->spyStore,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_quote' => $this->idQuote instanceof AbstractTransfer ? $this->idQuote->toArray(true, false) : $this->idQuote,
            'fk_store' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, false) : $this->fkStore,
            'customer_reference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, false) : $this->customerReference,
            'quote_data' => $this->quoteData instanceof AbstractTransfer ? $this->quoteData->toArray(true, false) : $this->quoteData,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'spy_store' => $this->spyStore instanceof AbstractTransfer ? $this->spyStore->toArray(true, false) : $this->spyStore,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idQuote' => $this->idQuote instanceof AbstractTransfer ? $this->idQuote->toArray(true, true) : $this->idQuote,
            'fkStore' => $this->fkStore instanceof AbstractTransfer ? $this->fkStore->toArray(true, true) : $this->fkStore,
            'customerReference' => $this->customerReference instanceof AbstractTransfer ? $this->customerReference->toArray(true, true) : $this->customerReference,
            'quoteData' => $this->quoteData instanceof AbstractTransfer ? $this->quoteData->toArray(true, true) : $this->quoteData,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'spyStore' => $this->spyStore instanceof AbstractTransfer ? $this->spyStore->toArray(true, true) : $this->spyStore,
        ];
    }
}
