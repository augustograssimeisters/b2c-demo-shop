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
class ShipmentTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const REQUESTED_DELIVERY_DATE = 'requestedDeliveryDate';

    /**
     * @var string
     */
    public const SHIPPING_ADDRESS = 'shippingAddress';

    /**
     * @var string
     */
    public const SHIPMENT_SELECTION = 'shipmentSelection';

    /**
     * @var string
     */
    public const METHOD = 'method';

    /**
     * @var string
     */
    public const CARRIER = 'carrier';

    /**
     * @var string
     */
    public const ID_SALES_SHIPMENT = 'idSalesShipment';

    /**
     * @var string
     */
    public const UUID = 'uuid';

    /**
     * @var string
     */
    public const SHIPMENT_TYPE_UUID = 'shipmentTypeUuid';

    /**
     * @var string
     */
    public const ORDER_ITEMS = 'orderItems';

    /**
     * @var string|null
     */
    protected $requestedDeliveryDate;

    /**
     * @var \Generated\Shared\Transfer\AddressTransfer|null
     */
    protected $shippingAddress;

    /**
     * @var string|null
     */
    protected $shipmentSelection;

    /**
     * @var \Generated\Shared\Transfer\ShipmentMethodTransfer|null
     */
    protected $method;

    /**
     * @var \Generated\Shared\Transfer\ShipmentCarrierTransfer|null
     */
    protected $carrier;

    /**
     * @var int|null
     */
    protected $idSalesShipment;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var string|null
     */
    protected $shipmentTypeUuid;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ItemTransfer>
     */
    protected $orderItems;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'requested_delivery_date' => 'requestedDeliveryDate',
        'requestedDeliveryDate' => 'requestedDeliveryDate',
        'RequestedDeliveryDate' => 'requestedDeliveryDate',
        'shipping_address' => 'shippingAddress',
        'shippingAddress' => 'shippingAddress',
        'ShippingAddress' => 'shippingAddress',
        'shipment_selection' => 'shipmentSelection',
        'shipmentSelection' => 'shipmentSelection',
        'ShipmentSelection' => 'shipmentSelection',
        'method' => 'method',
        'Method' => 'method',
        'carrier' => 'carrier',
        'Carrier' => 'carrier',
        'id_sales_shipment' => 'idSalesShipment',
        'idSalesShipment' => 'idSalesShipment',
        'IdSalesShipment' => 'idSalesShipment',
        'uuid' => 'uuid',
        'Uuid' => 'uuid',
        'shipment_type_uuid' => 'shipmentTypeUuid',
        'shipmentTypeUuid' => 'shipmentTypeUuid',
        'ShipmentTypeUuid' => 'shipmentTypeUuid',
        'order_items' => 'orderItems',
        'orderItems' => 'orderItems',
        'OrderItems' => 'orderItems',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::REQUESTED_DELIVERY_DATE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'requested_delivery_date',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPPING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\AddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipping_address',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SHIPMENT_SELECTION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'shipment_selection',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::METHOD => [
            'type' => 'Generated\Shared\Transfer\ShipmentMethodTransfer',
            'type_shim' => null,
            'name_underscore' => 'method',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CARRIER => [
            'type' => 'Generated\Shared\Transfer\ShipmentCarrierTransfer',
            'type_shim' => null,
            'name_underscore' => 'carrier',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SALES_SHIPMENT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_shipment',
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
            'is_strict' => true,
        ],
        self::SHIPMENT_TYPE_UUID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'shipment_type_uuid',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ORDER_ITEMS => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'order_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module CheckoutPage|CustomerPage|CheckoutRestApi|Oms|ProductBundleCartsRestApi|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param string|null $requestedDeliveryDate
     *
     * @return $this
     */
    public function setRequestedDeliveryDate($requestedDeliveryDate)
    {
        $this->requestedDeliveryDate = $requestedDeliveryDate;
        $this->modifiedProperties[self::REQUESTED_DELIVERY_DATE] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|CheckoutRestApi|Oms|ProductBundleCartsRestApi|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @return string|null
     */
    public function getRequestedDeliveryDate()
    {
        return $this->requestedDeliveryDate;
    }

    /**
     * @module CheckoutPage|CustomerPage|CheckoutRestApi|Oms|ProductBundleCartsRestApi|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param string|null $requestedDeliveryDate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRequestedDeliveryDateOrFail($requestedDeliveryDate)
    {
        if ($requestedDeliveryDate === null) {
            $this->throwNullValueException(static::REQUESTED_DELIVERY_DATE);
        }

        return $this->setRequestedDeliveryDate($requestedDeliveryDate);
    }

    /**
     * @module CheckoutPage|CustomerPage|CheckoutRestApi|Oms|ProductBundleCartsRestApi|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRequestedDeliveryDateOrFail()
    {
        if ($this->requestedDeliveryDate === null) {
            $this->throwNullValueException(static::REQUESTED_DELIVERY_DATE);
        }

        return $this->requestedDeliveryDate;
    }

    /**
     * @module CheckoutPage|CustomerPage|CheckoutRestApi|Oms|ProductBundleCartsRestApi|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequestedDeliveryDate()
    {
        $this->assertPropertyIsSet(self::REQUESTED_DELIVERY_DATE);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|CheckoutRestApi|Customer|CustomersRestApi|Oms|OrdersRestApi|ProductOption|Sales|ShipmentGui|Shipment|ShipmentsRestApi|TaxApp|TaxProductConnector
     *
     * @param \Generated\Shared\Transfer\AddressTransfer|null $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress(AddressTransfer $shippingAddress = null)
    {
        $this->shippingAddress = $shippingAddress;
        $this->modifiedProperties[self::SHIPPING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|CheckoutRestApi|Customer|CustomersRestApi|Oms|OrdersRestApi|ProductOption|Sales|ShipmentGui|Shipment|ShipmentsRestApi|TaxApp|TaxProductConnector
     *
     * @return \Generated\Shared\Transfer\AddressTransfer|null
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|CheckoutRestApi|Customer|CustomersRestApi|Oms|OrdersRestApi|ProductOption|Sales|ShipmentGui|Shipment|ShipmentsRestApi|TaxApp|TaxProductConnector
     *
     * @param \Generated\Shared\Transfer\AddressTransfer $shippingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShippingAddressOrFail(AddressTransfer $shippingAddress)
    {
        return $this->setShippingAddress($shippingAddress);
    }

    /**
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|CheckoutRestApi|Customer|CustomersRestApi|Oms|OrdersRestApi|ProductOption|Sales|ShipmentGui|Shipment|ShipmentsRestApi|TaxApp|TaxProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\AddressTransfer
     */
    public function getShippingAddressOrFail()
    {
        if ($this->shippingAddress === null) {
            $this->throwNullValueException(static::SHIPPING_ADDRESS);
        }

        return $this->shippingAddress;
    }

    /**
     * @module CheckoutPage|CustomerPage|CustomerReorderWidget|CheckoutRestApi|Customer|CustomersRestApi|Oms|OrdersRestApi|ProductOption|Sales|ShipmentGui|Shipment|ShipmentsRestApi|TaxApp|TaxProductConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShippingAddress()
    {
        $this->assertPropertyIsSet(self::SHIPPING_ADDRESS);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|GiftCard|Oms|ProductBundleCartsRestApi|ShipmentCartConnector|Shipment|ShipmentsRestApi
     *
     * @param string|null $shipmentSelection
     *
     * @return $this
     */
    public function setShipmentSelection($shipmentSelection)
    {
        $this->shipmentSelection = $shipmentSelection;
        $this->modifiedProperties[self::SHIPMENT_SELECTION] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|GiftCard|Oms|ProductBundleCartsRestApi|ShipmentCartConnector|Shipment|ShipmentsRestApi
     *
     * @return string|null
     */
    public function getShipmentSelection()
    {
        return $this->shipmentSelection;
    }

    /**
     * @module CheckoutPage|CustomerPage|GiftCard|Oms|ProductBundleCartsRestApi|ShipmentCartConnector|Shipment|ShipmentsRestApi
     *
     * @param string|null $shipmentSelection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShipmentSelectionOrFail($shipmentSelection)
    {
        if ($shipmentSelection === null) {
            $this->throwNullValueException(static::SHIPMENT_SELECTION);
        }

        return $this->setShipmentSelection($shipmentSelection);
    }

    /**
     * @module CheckoutPage|CustomerPage|GiftCard|Oms|ProductBundleCartsRestApi|ShipmentCartConnector|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getShipmentSelectionOrFail()
    {
        if ($this->shipmentSelection === null) {
            $this->throwNullValueException(static::SHIPMENT_SELECTION);
        }

        return $this->shipmentSelection;
    }

    /**
     * @module CheckoutPage|CustomerPage|GiftCard|Oms|ProductBundleCartsRestApi|ShipmentCartConnector|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipmentSelection()
    {
        $this->assertPropertyIsSet(self::SHIPMENT_SELECTION);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|ShipmentTypeWidget|GiftCard|Oms|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentType|Shipment|ShipmentsRestApi|TaxApp
     *
     * @param \Generated\Shared\Transfer\ShipmentMethodTransfer|null $method
     *
     * @return $this
     */
    public function setMethod(ShipmentMethodTransfer $method = null)
    {
        $this->method = $method;
        $this->modifiedProperties[self::METHOD] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|ShipmentTypeWidget|GiftCard|Oms|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentType|Shipment|ShipmentsRestApi|TaxApp
     *
     * @return \Generated\Shared\Transfer\ShipmentMethodTransfer|null
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @module CheckoutPage|CustomerPage|ShipmentTypeWidget|GiftCard|Oms|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentType|Shipment|ShipmentsRestApi|TaxApp
     *
     * @param \Generated\Shared\Transfer\ShipmentMethodTransfer $method
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMethodOrFail(ShipmentMethodTransfer $method)
    {
        return $this->setMethod($method);
    }

    /**
     * @module CheckoutPage|CustomerPage|ShipmentTypeWidget|GiftCard|Oms|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentType|Shipment|ShipmentsRestApi|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ShipmentMethodTransfer
     */
    public function getMethodOrFail()
    {
        if ($this->method === null) {
            $this->throwNullValueException(static::METHOD);
        }

        return $this->method;
    }

    /**
     * @module CheckoutPage|CustomerPage|ShipmentTypeWidget|GiftCard|Oms|ShipmentCartConnector|ShipmentCheckoutConnector|ShipmentDiscountConnector|ShipmentType|Shipment|ShipmentsRestApi|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMethod()
    {
        $this->assertPropertyIsSet(self::METHOD);

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Oms|ShipmentDiscountConnector|Shipment|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\ShipmentCarrierTransfer|null $carrier
     *
     * @return $this
     */
    public function setCarrier(ShipmentCarrierTransfer $carrier = null)
    {
        $this->carrier = $carrier;
        $this->modifiedProperties[self::CARRIER] = true;

        return $this;
    }

    /**
     * @module CheckoutPage|CustomerPage|Oms|ShipmentDiscountConnector|Shipment|ShipmentsRestApi
     *
     * @return \Generated\Shared\Transfer\ShipmentCarrierTransfer|null
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @module CheckoutPage|CustomerPage|Oms|ShipmentDiscountConnector|Shipment|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\ShipmentCarrierTransfer $carrier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCarrierOrFail(ShipmentCarrierTransfer $carrier)
    {
        return $this->setCarrier($carrier);
    }

    /**
     * @module CheckoutPage|CustomerPage|Oms|ShipmentDiscountConnector|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ShipmentCarrierTransfer
     */
    public function getCarrierOrFail()
    {
        if ($this->carrier === null) {
            $this->throwNullValueException(static::CARRIER);
        }

        return $this->carrier;
    }

    /**
     * @module CheckoutPage|CustomerPage|Oms|ShipmentDiscountConnector|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCarrier()
    {
        $this->assertPropertyIsSet(self::CARRIER);

        return $this;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|CheckoutRestApi|SalesShipmentType|Sales|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param int|null $idSalesShipment
     *
     * @return $this
     */
    public function setIdSalesShipment($idSalesShipment)
    {
        $this->idSalesShipment = $idSalesShipment;
        $this->modifiedProperties[self::ID_SALES_SHIPMENT] = true;

        return $this;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|CheckoutRestApi|SalesShipmentType|Sales|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @return int|null
     */
    public function getIdSalesShipment()
    {
        return $this->idSalesShipment;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|CheckoutRestApi|SalesShipmentType|Sales|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @param int|null $idSalesShipment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesShipmentOrFail($idSalesShipment)
    {
        if ($idSalesShipment === null) {
            $this->throwNullValueException(static::ID_SALES_SHIPMENT);
        }

        return $this->setIdSalesShipment($idSalesShipment);
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|CheckoutRestApi|SalesShipmentType|Sales|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesShipmentOrFail()
    {
        if ($this->idSalesShipment === null) {
            $this->throwNullValueException(static::ID_SALES_SHIPMENT);
        }

        return $this->idSalesShipment;
    }

    /**
     * @module CustomerPage|CustomerReorderWidget|CheckoutRestApi|SalesShipmentType|Sales|ShipmentGui|Shipment|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesShipment()
    {
        $this->assertPropertyIsSet(self::ID_SALES_SHIPMENT);

        return $this;
    }

    /**
     * @module CustomerReorderWidget|ShipmentsBackendApi
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
     * @module CustomerReorderWidget|ShipmentsBackendApi
     *
     * @return string|null
     */
    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    /**
     * @module CustomerReorderWidget|ShipmentsBackendApi
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
     * @module CustomerReorderWidget|ShipmentsBackendApi
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
     * @module CustomerReorderWidget|ShipmentsBackendApi
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
     * @module ShipmentTypeWidget
     *
     * @param string|null $shipmentTypeUuid
     *
     * @return $this
     */
    public function setShipmentTypeUuid(?string $shipmentTypeUuid = null)
    {
        $this->shipmentTypeUuid = $shipmentTypeUuid;
        $this->modifiedProperties[self::SHIPMENT_TYPE_UUID] = true;

        return $this;
    }

    /**
     * @module ShipmentTypeWidget
     *
     * @return string|null
     */
    public function getShipmentTypeUuid(): ?string
    {
        return $this->shipmentTypeUuid;
    }

    /**
     * @module ShipmentTypeWidget
     *
     * @param string $shipmentTypeUuid
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShipmentTypeUuidOrFail(string $shipmentTypeUuid)
    {
        return $this->setShipmentTypeUuid($shipmentTypeUuid);
    }

    /**
     * @module ShipmentTypeWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getShipmentTypeUuidOrFail(): string
    {
        if ($this->shipmentTypeUuid === null) {
            $this->throwNullValueException(static::SHIPMENT_TYPE_UUID);
        }

        return $this->shipmentTypeUuid;
    }

    /**
     * @module ShipmentTypeWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShipmentTypeUuid()
    {
        $this->assertPropertyIsSet(self::SHIPMENT_TYPE_UUID);

        return $this;
    }

    /**
     * @module Shipment|ShipmentsBackendApi
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ItemTransfer> $orderItems
     *
     * @return $this
     */
    public function setOrderItems(ArrayObject $orderItems)
    {
        $this->orderItems = $orderItems;
        $this->modifiedProperties[self::ORDER_ITEMS] = true;

        return $this;
    }

    /**
     * @module Shipment|ShipmentsBackendApi
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ItemTransfer>
     */
    public function getOrderItems()
    {
        return $this->orderItems;
    }

    /**
     * @module Shipment|ShipmentsBackendApi
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $orderItem
     *
     * @return $this
     */
    public function addOrderItem(ItemTransfer $orderItem)
    {
        $this->orderItems[] = $orderItem;
        $this->modifiedProperties[self::ORDER_ITEMS] = true;

        return $this;
    }

    /**
     * @module Shipment|ShipmentsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderItems()
    {
        $this->assertCollectionPropertyIsSet(self::ORDER_ITEMS);

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
                case 'requestedDeliveryDate':
                case 'shipmentSelection':
                case 'idSalesShipment':
                case 'uuid':
                case 'shipmentTypeUuid':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'shippingAddress':
                case 'method':
                case 'carrier':
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
                case 'orderItems':
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
                case 'requestedDeliveryDate':
                case 'shipmentSelection':
                case 'idSalesShipment':
                case 'uuid':
                case 'shipmentTypeUuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'shippingAddress':
                case 'method':
                case 'carrier':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'orderItems':
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
                case 'requestedDeliveryDate':
                case 'shipmentSelection':
                case 'idSalesShipment':
                case 'uuid':
                case 'shipmentTypeUuid':
                    $values[$arrayKey] = $value;

                    break;
                case 'shippingAddress':
                case 'method':
                case 'carrier':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'orderItems':
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
        $this->orderItems = $this->orderItems ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'requestedDeliveryDate' => $this->requestedDeliveryDate,
            'shipmentSelection' => $this->shipmentSelection,
            'idSalesShipment' => $this->idSalesShipment,
            'uuid' => $this->uuid,
            'shipmentTypeUuid' => $this->shipmentTypeUuid,
            'shippingAddress' => $this->shippingAddress,
            'method' => $this->method,
            'carrier' => $this->carrier,
            'orderItems' => $this->orderItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'requested_delivery_date' => $this->requestedDeliveryDate,
            'shipment_selection' => $this->shipmentSelection,
            'id_sales_shipment' => $this->idSalesShipment,
            'uuid' => $this->uuid,
            'shipment_type_uuid' => $this->shipmentTypeUuid,
            'shipping_address' => $this->shippingAddress,
            'method' => $this->method,
            'carrier' => $this->carrier,
            'order_items' => $this->orderItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'requested_delivery_date' => $this->requestedDeliveryDate instanceof AbstractTransfer ? $this->requestedDeliveryDate->toArray(true, false) : $this->requestedDeliveryDate,
            'shipment_selection' => $this->shipmentSelection instanceof AbstractTransfer ? $this->shipmentSelection->toArray(true, false) : $this->shipmentSelection,
            'id_sales_shipment' => $this->idSalesShipment instanceof AbstractTransfer ? $this->idSalesShipment->toArray(true, false) : $this->idSalesShipment,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, false) : $this->uuid,
            'shipment_type_uuid' => $this->shipmentTypeUuid instanceof AbstractTransfer ? $this->shipmentTypeUuid->toArray(true, false) : $this->shipmentTypeUuid,
            'shipping_address' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, false) : $this->shippingAddress,
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, false) : $this->method,
            'carrier' => $this->carrier instanceof AbstractTransfer ? $this->carrier->toArray(true, false) : $this->carrier,
            'order_items' => $this->orderItems instanceof AbstractTransfer ? $this->orderItems->toArray(true, false) : $this->addValuesToCollection($this->orderItems, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'requestedDeliveryDate' => $this->requestedDeliveryDate instanceof AbstractTransfer ? $this->requestedDeliveryDate->toArray(true, true) : $this->requestedDeliveryDate,
            'shipmentSelection' => $this->shipmentSelection instanceof AbstractTransfer ? $this->shipmentSelection->toArray(true, true) : $this->shipmentSelection,
            'idSalesShipment' => $this->idSalesShipment instanceof AbstractTransfer ? $this->idSalesShipment->toArray(true, true) : $this->idSalesShipment,
            'uuid' => $this->uuid instanceof AbstractTransfer ? $this->uuid->toArray(true, true) : $this->uuid,
            'shipmentTypeUuid' => $this->shipmentTypeUuid instanceof AbstractTransfer ? $this->shipmentTypeUuid->toArray(true, true) : $this->shipmentTypeUuid,
            'shippingAddress' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, true) : $this->shippingAddress,
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, true) : $this->method,
            'carrier' => $this->carrier instanceof AbstractTransfer ? $this->carrier->toArray(true, true) : $this->carrier,
            'orderItems' => $this->orderItems instanceof AbstractTransfer ? $this->orderItems->toArray(true, true) : $this->addValuesToCollection($this->orderItems, true, true),
        ];
    }
}
