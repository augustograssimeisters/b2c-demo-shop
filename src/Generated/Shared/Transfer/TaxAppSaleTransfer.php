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
class TaxAppSaleTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const TRANSACTION_ID = 'transactionId';

    /**
     * @var string
     */
    public const DOCUMENT_NUMBER = 'documentNumber';

    /**
     * @var string
     */
    public const DOCUMENT_DATE = 'documentDate';

    /**
     * @var string
     */
    public const ITEMS = 'items';

    /**
     * @var string
     */
    public const SHIPMENTS = 'shipments';

    /**
     * @var string
     */
    public const TAX_METADATA = 'taxMetadata';

    /**
     * @var string
     */
    public const TAX_TOTAL = 'taxTotal';

    /**
     * @var string
     */
    public const REFUNDED_TAX_TOTAL = 'refundedTaxTotal';

    /**
     * @var string
     */
    public const PRICE_MODE = 'priceMode';

    /**
     * @var string
     */
    public const SELLER_COUNTRY_CODE = 'sellerCountryCode';

    /**
     * @var string
     */
    public const CUSTOMER_COUNTRY_CODE = 'customerCountryCode';

    /**
     * @var string|null
     */
    protected $transactionId;

    /**
     * @var string|null
     */
    protected $documentNumber;

    /**
     * @var string|null
     */
    protected $documentDate;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\TaxAppItemTransfer>
     */
    protected $items;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\TaxAppShipmentTransfer>
     */
    protected $shipments;

    /**
     * @var array
     */
    protected $taxMetadata = [];

    /**
     * @var int|null
     */
    protected $taxTotal;

    /**
     * @var int|null
     */
    protected $refundedTaxTotal;

    /**
     * @var string|null
     */
    protected $priceMode;

    /**
     * @var string|null
     */
    protected $sellerCountryCode;

    /**
     * @var string|null
     */
    protected $customerCountryCode;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'transaction_id' => 'transactionId',
        'transactionId' => 'transactionId',
        'TransactionId' => 'transactionId',
        'document_number' => 'documentNumber',
        'documentNumber' => 'documentNumber',
        'DocumentNumber' => 'documentNumber',
        'document_date' => 'documentDate',
        'documentDate' => 'documentDate',
        'DocumentDate' => 'documentDate',
        'items' => 'items',
        'Items' => 'items',
        'shipments' => 'shipments',
        'Shipments' => 'shipments',
        'tax_metadata' => 'taxMetadata',
        'taxMetadata' => 'taxMetadata',
        'TaxMetadata' => 'taxMetadata',
        'tax_total' => 'taxTotal',
        'taxTotal' => 'taxTotal',
        'TaxTotal' => 'taxTotal',
        'refunded_tax_total' => 'refundedTaxTotal',
        'refundedTaxTotal' => 'refundedTaxTotal',
        'RefundedTaxTotal' => 'refundedTaxTotal',
        'price_mode' => 'priceMode',
        'priceMode' => 'priceMode',
        'PriceMode' => 'priceMode',
        'seller_country_code' => 'sellerCountryCode',
        'sellerCountryCode' => 'sellerCountryCode',
        'SellerCountryCode' => 'sellerCountryCode',
        'customer_country_code' => 'customerCountryCode',
        'customerCountryCode' => 'customerCountryCode',
        'CustomerCountryCode' => 'customerCountryCode',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::TRANSACTION_ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'transaction_id',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::DOCUMENT_NUMBER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'document_number',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::DOCUMENT_DATE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'document_date',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ITEMS => [
            'type' => 'Generated\Shared\Transfer\TaxAppItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SHIPMENTS => [
            'type' => 'Generated\Shared\Transfer\TaxAppShipmentTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipments',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::TAX_METADATA => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'tax_metadata',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::TAX_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'tax_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::REFUNDED_TAX_TOTAL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'refunded_tax_total',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::PRICE_MODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'price_mode',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::SELLER_COUNTRY_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'seller_country_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::CUSTOMER_COUNTRY_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_country_code',
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
     * @param string|null $transactionId
     *
     * @return $this
     */
    public function setTransactionId(?string $transactionId = null)
    {
        $this->transactionId = $transactionId;
        $this->modifiedProperties[self::TRANSACTION_ID] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     * @module TaxApp
     *
     * @param string $transactionId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTransactionIdOrFail(string $transactionId)
    {
        return $this->setTransactionId($transactionId);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTransactionIdOrFail(): string
    {
        if ($this->transactionId === null) {
            $this->throwNullValueException(static::TRANSACTION_ID);
        }

        return $this->transactionId;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTransactionId()
    {
        $this->assertPropertyIsSet(self::TRANSACTION_ID);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param string|null $documentNumber
     *
     * @return $this
     */
    public function setDocumentNumber(?string $documentNumber = null)
    {
        $this->documentNumber = $documentNumber;
        $this->modifiedProperties[self::DOCUMENT_NUMBER] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string|null
     */
    public function getDocumentNumber(): ?string
    {
        return $this->documentNumber;
    }

    /**
     * @module TaxApp
     *
     * @param string $documentNumber
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDocumentNumberOrFail(string $documentNumber)
    {
        return $this->setDocumentNumber($documentNumber);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDocumentNumberOrFail(): string
    {
        if ($this->documentNumber === null) {
            $this->throwNullValueException(static::DOCUMENT_NUMBER);
        }

        return $this->documentNumber;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDocumentNumber()
    {
        $this->assertPropertyIsSet(self::DOCUMENT_NUMBER);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param string|null $documentDate
     *
     * @return $this
     */
    public function setDocumentDate(?string $documentDate = null)
    {
        $this->documentDate = $documentDate;
        $this->modifiedProperties[self::DOCUMENT_DATE] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string|null
     */
    public function getDocumentDate(): ?string
    {
        return $this->documentDate;
    }

    /**
     * @module TaxApp
     *
     * @param string $documentDate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDocumentDateOrFail(string $documentDate)
    {
        return $this->setDocumentDate($documentDate);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDocumentDateOrFail(): string
    {
        if ($this->documentDate === null) {
            $this->throwNullValueException(static::DOCUMENT_DATE);
        }

        return $this->documentDate;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireDocumentDate()
    {
        $this->assertPropertyIsSet(self::DOCUMENT_DATE);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\TaxAppItemTransfer> $items
     *
     * @return $this
     */
    public function setItems(ArrayObject $items)
    {
        $this->items = new ArrayObject();

        foreach ($items as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::ITEMS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addItem(...$args);
        }

        $this->modifiedProperties[self::ITEMS] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\TaxAppItemTransfer>
     */
    public function getItems(): ArrayObject
    {
        return $this->items;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\TaxAppItemTransfer $item
     *
     * @return $this
     */
    public function addItem(TaxAppItemTransfer $item)
    {
        $this->items[] = $item;
        $this->modifiedProperties[self::ITEMS] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItems()
    {
        $this->assertCollectionPropertyIsSet(self::ITEMS);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\TaxAppShipmentTransfer> $shipments
     *
     * @return $this
     */
    public function setShipments(ArrayObject $shipments)
    {
        $this->shipments = new ArrayObject();

        foreach ($shipments as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::SHIPMENTS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addShipment(...$args);
        }

        $this->modifiedProperties[self::SHIPMENTS] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\TaxAppShipmentTransfer>
     */
    public function getShipments(): ArrayObject
    {
        return $this->shipments;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\TaxAppShipmentTransfer $shipment
     *
     * @return $this
     */
    public function addShipment(TaxAppShipmentTransfer $shipment)
    {
        $this->shipments[] = $shipment;
        $this->modifiedProperties[self::SHIPMENTS] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipments()
    {
        $this->assertCollectionPropertyIsSet(self::SHIPMENTS);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param array|null $taxMetadata
     *
     * @return $this
     */
    public function setTaxMetadata(array $taxMetadata = null)
    {
        if ($taxMetadata === null) {
            $taxMetadata = [];
        }

        $this->taxMetadata = $taxMetadata;
        $this->modifiedProperties[self::TAX_METADATA] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return array
     */
    public function getTaxMetadata(): array
    {
        return $this->taxMetadata;
    }

    /**
     * @module TaxApp
     *
     * @param string|int $taxMetadataEntryKey
     * @param mixed $taxMetadataEntryValue
     *
     * @return $this
     */
    public function addTaxMetadataEntry($taxMetadataEntryKey, $taxMetadataEntryValue)
    {
        $this->taxMetadata[$taxMetadataEntryKey] = $taxMetadataEntryValue;
        $this->modifiedProperties[self::TAX_METADATA] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxMetadata()
    {
        $this->assertPropertyIsSet(self::TAX_METADATA);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param string|int $key
     *
     * @return mixed
     */
    public function getTaxMetadataEntry($key)
    {
        return $this->taxMetadata[$key];
    }


    /**
     * @module TaxApp
     *
     * @param int|null $taxTotal
     *
     * @return $this
     */
    public function setTaxTotal(?int $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        $this->modifiedProperties[self::TAX_TOTAL] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return int|null
     */
    public function getTaxTotal(): ?int
    {
        return $this->taxTotal;
    }

    /**
     * @module TaxApp
     *
     * @param int $taxTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTaxTotalOrFail(int $taxTotal)
    {
        return $this->setTaxTotal($taxTotal);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getTaxTotalOrFail(): int
    {
        if ($this->taxTotal === null) {
            $this->throwNullValueException(static::TAX_TOTAL);
        }

        return $this->taxTotal;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireTaxTotal()
    {
        $this->assertPropertyIsSet(self::TAX_TOTAL);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param int|null $refundedTaxTotal
     *
     * @return $this
     */
    public function setRefundedTaxTotal(?int $refundedTaxTotal = null)
    {
        $this->refundedTaxTotal = $refundedTaxTotal;
        $this->modifiedProperties[self::REFUNDED_TAX_TOTAL] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return int|null
     */
    public function getRefundedTaxTotal(): ?int
    {
        return $this->refundedTaxTotal;
    }

    /**
     * @module TaxApp
     *
     * @param int $refundedTaxTotal
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRefundedTaxTotalOrFail(int $refundedTaxTotal)
    {
        return $this->setRefundedTaxTotal($refundedTaxTotal);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getRefundedTaxTotalOrFail(): int
    {
        if ($this->refundedTaxTotal === null) {
            $this->throwNullValueException(static::REFUNDED_TAX_TOTAL);
        }

        return $this->refundedTaxTotal;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRefundedTaxTotal()
    {
        $this->assertPropertyIsSet(self::REFUNDED_TAX_TOTAL);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param string|null $priceMode
     *
     * @return $this
     */
    public function setPriceMode(?string $priceMode = null)
    {
        $this->priceMode = $priceMode;
        $this->modifiedProperties[self::PRICE_MODE] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string|null
     */
    public function getPriceMode(): ?string
    {
        return $this->priceMode;
    }

    /**
     * @module TaxApp
     *
     * @param string $priceMode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceModeOrFail(string $priceMode)
    {
        return $this->setPriceMode($priceMode);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPriceModeOrFail(): string
    {
        if ($this->priceMode === null) {
            $this->throwNullValueException(static::PRICE_MODE);
        }

        return $this->priceMode;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePriceMode()
    {
        $this->assertPropertyIsSet(self::PRICE_MODE);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param string|null $sellerCountryCode
     *
     * @return $this
     */
    public function setSellerCountryCode(?string $sellerCountryCode = null)
    {
        $this->sellerCountryCode = $sellerCountryCode;
        $this->modifiedProperties[self::SELLER_COUNTRY_CODE] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string|null
     */
    public function getSellerCountryCode(): ?string
    {
        return $this->sellerCountryCode;
    }

    /**
     * @module TaxApp
     *
     * @param string $sellerCountryCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSellerCountryCodeOrFail(string $sellerCountryCode)
    {
        return $this->setSellerCountryCode($sellerCountryCode);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSellerCountryCodeOrFail(): string
    {
        if ($this->sellerCountryCode === null) {
            $this->throwNullValueException(static::SELLER_COUNTRY_CODE);
        }

        return $this->sellerCountryCode;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSellerCountryCode()
    {
        $this->assertPropertyIsSet(self::SELLER_COUNTRY_CODE);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param string|null $customerCountryCode
     *
     * @return $this
     */
    public function setCustomerCountryCode(?string $customerCountryCode = null)
    {
        $this->customerCountryCode = $customerCountryCode;
        $this->modifiedProperties[self::CUSTOMER_COUNTRY_CODE] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return string|null
     */
    public function getCustomerCountryCode(): ?string
    {
        return $this->customerCountryCode;
    }

    /**
     * @module TaxApp
     *
     * @param string $customerCountryCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerCountryCodeOrFail(string $customerCountryCode)
    {
        return $this->setCustomerCountryCode($customerCountryCode);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerCountryCodeOrFail(): string
    {
        if ($this->customerCountryCode === null) {
            $this->throwNullValueException(static::CUSTOMER_COUNTRY_CODE);
        }

        return $this->customerCountryCode;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerCountryCode()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_COUNTRY_CODE);

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
                case 'transactionId':
                case 'documentNumber':
                case 'documentDate':
                case 'taxMetadata':
                case 'taxTotal':
                case 'refundedTaxTotal':
                case 'priceMode':
                case 'sellerCountryCode':
                case 'customerCountryCode':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'items':
                case 'shipments':
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
                case 'transactionId':
                case 'documentNumber':
                case 'documentDate':
                case 'taxMetadata':
                case 'taxTotal':
                case 'refundedTaxTotal':
                case 'priceMode':
                case 'sellerCountryCode':
                case 'customerCountryCode':
                    $values[$arrayKey] = $value;

                    break;
                case 'items':
                case 'shipments':
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
                case 'transactionId':
                case 'documentNumber':
                case 'documentDate':
                case 'taxMetadata':
                case 'taxTotal':
                case 'refundedTaxTotal':
                case 'priceMode':
                case 'sellerCountryCode':
                case 'customerCountryCode':
                    $values[$arrayKey] = $value;

                    break;
                case 'items':
                case 'shipments':
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
        $this->items = $this->items ?: new ArrayObject();
        $this->shipments = $this->shipments ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'transactionId' => $this->transactionId,
            'documentNumber' => $this->documentNumber,
            'documentDate' => $this->documentDate,
            'taxMetadata' => $this->taxMetadata,
            'taxTotal' => $this->taxTotal,
            'refundedTaxTotal' => $this->refundedTaxTotal,
            'priceMode' => $this->priceMode,
            'sellerCountryCode' => $this->sellerCountryCode,
            'customerCountryCode' => $this->customerCountryCode,
            'items' => $this->items,
            'shipments' => $this->shipments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'transaction_id' => $this->transactionId,
            'document_number' => $this->documentNumber,
            'document_date' => $this->documentDate,
            'tax_metadata' => $this->taxMetadata,
            'tax_total' => $this->taxTotal,
            'refunded_tax_total' => $this->refundedTaxTotal,
            'price_mode' => $this->priceMode,
            'seller_country_code' => $this->sellerCountryCode,
            'customer_country_code' => $this->customerCountryCode,
            'items' => $this->items,
            'shipments' => $this->shipments,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'transaction_id' => $this->transactionId instanceof AbstractTransfer ? $this->transactionId->toArray(true, false) : $this->transactionId,
            'document_number' => $this->documentNumber instanceof AbstractTransfer ? $this->documentNumber->toArray(true, false) : $this->documentNumber,
            'document_date' => $this->documentDate instanceof AbstractTransfer ? $this->documentDate->toArray(true, false) : $this->documentDate,
            'tax_metadata' => $this->taxMetadata instanceof AbstractTransfer ? $this->taxMetadata->toArray(true, false) : $this->taxMetadata,
            'tax_total' => $this->taxTotal instanceof AbstractTransfer ? $this->taxTotal->toArray(true, false) : $this->taxTotal,
            'refunded_tax_total' => $this->refundedTaxTotal instanceof AbstractTransfer ? $this->refundedTaxTotal->toArray(true, false) : $this->refundedTaxTotal,
            'price_mode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, false) : $this->priceMode,
            'seller_country_code' => $this->sellerCountryCode instanceof AbstractTransfer ? $this->sellerCountryCode->toArray(true, false) : $this->sellerCountryCode,
            'customer_country_code' => $this->customerCountryCode instanceof AbstractTransfer ? $this->customerCountryCode->toArray(true, false) : $this->customerCountryCode,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, false) : $this->addValuesToCollection($this->items, true, false),
            'shipments' => $this->shipments instanceof AbstractTransfer ? $this->shipments->toArray(true, false) : $this->addValuesToCollection($this->shipments, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'transactionId' => $this->transactionId instanceof AbstractTransfer ? $this->transactionId->toArray(true, true) : $this->transactionId,
            'documentNumber' => $this->documentNumber instanceof AbstractTransfer ? $this->documentNumber->toArray(true, true) : $this->documentNumber,
            'documentDate' => $this->documentDate instanceof AbstractTransfer ? $this->documentDate->toArray(true, true) : $this->documentDate,
            'taxMetadata' => $this->taxMetadata instanceof AbstractTransfer ? $this->taxMetadata->toArray(true, true) : $this->taxMetadata,
            'taxTotal' => $this->taxTotal instanceof AbstractTransfer ? $this->taxTotal->toArray(true, true) : $this->taxTotal,
            'refundedTaxTotal' => $this->refundedTaxTotal instanceof AbstractTransfer ? $this->refundedTaxTotal->toArray(true, true) : $this->refundedTaxTotal,
            'priceMode' => $this->priceMode instanceof AbstractTransfer ? $this->priceMode->toArray(true, true) : $this->priceMode,
            'sellerCountryCode' => $this->sellerCountryCode instanceof AbstractTransfer ? $this->sellerCountryCode->toArray(true, true) : $this->sellerCountryCode,
            'customerCountryCode' => $this->customerCountryCode instanceof AbstractTransfer ? $this->customerCountryCode->toArray(true, true) : $this->customerCountryCode,
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, true) : $this->addValuesToCollection($this->items, true, true),
            'shipments' => $this->shipments instanceof AbstractTransfer ? $this->shipments->toArray(true, true) : $this->addValuesToCollection($this->shipments, true, true),
        ];
    }
}
