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
class OmsEventTriggeredTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_EVENT = 'idEvent';

    /**
     * @var string
     */
    public const ORDER_ITEM_IDS = 'orderItemIds';

    /**
     * @var string
     */
    public const ID_SALES_ORDER = 'idSalesOrder';

    /**
     * @var string
     */
    public const EVENT_DATA = 'eventData';

    /**
     * @var string|null
     */
    protected $idEvent;

    /**
     * @var array
     */
    protected $orderItemIds = [];

    /**
     * @var int|null
     */
    protected $idSalesOrder;

    /**
     * @var array
     */
    protected $eventData = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_event' => 'idEvent',
        'idEvent' => 'idEvent',
        'IdEvent' => 'idEvent',
        'order_item_ids' => 'orderItemIds',
        'orderItemIds' => 'orderItemIds',
        'OrderItemIds' => 'orderItemIds',
        'id_sales_order' => 'idSalesOrder',
        'idSalesOrder' => 'idSalesOrder',
        'IdSalesOrder' => 'idSalesOrder',
        'event_data' => 'eventData',
        'eventData' => 'eventData',
        'EventData' => 'eventData',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_EVENT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_event',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ORDER_ITEM_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'order_item_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ID_SALES_ORDER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_sales_order',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::EVENT_DATA => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'event_data',
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
     * @module Oms|TaxApp
     *
     * @param string|null $idEvent
     *
     * @return $this
     */
    public function setIdEvent(?string $idEvent = null)
    {
        $this->idEvent = $idEvent;
        $this->modifiedProperties[self::ID_EVENT] = true;

        return $this;
    }

    /**
     * @module Oms|TaxApp
     *
     * @return string|null
     */
    public function getIdEvent(): ?string
    {
        return $this->idEvent;
    }

    /**
     * @module Oms|TaxApp
     *
     * @param string $idEvent
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdEventOrFail(string $idEvent)
    {
        return $this->setIdEvent($idEvent);
    }

    /**
     * @module Oms|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdEventOrFail(): string
    {
        if ($this->idEvent === null) {
            $this->throwNullValueException(static::ID_EVENT);
        }

        return $this->idEvent;
    }

    /**
     * @module Oms|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdEvent()
    {
        $this->assertPropertyIsSet(self::ID_EVENT);

        return $this;
    }

    /**
     * @module Oms|TaxApp
     *
     * @param array|null $orderItemIds
     *
     * @return $this
     */
    public function setOrderItemIds(array $orderItemIds = null)
    {
        if ($orderItemIds === null) {
            $orderItemIds = [];
        }

        $this->orderItemIds = $orderItemIds;
        $this->modifiedProperties[self::ORDER_ITEM_IDS] = true;

        return $this;
    }

    /**
     * @module Oms|TaxApp
     *
     * @return array
     */
    public function getOrderItemIds(): array
    {
        return $this->orderItemIds;
    }

    /**
     * @module Oms|TaxApp
     *
     * @param mixed $idOrderItem
     *
     * @return $this
     */
    public function addIdOrderItem($idOrderItem)
    {
        $this->orderItemIds[] = $idOrderItem;
        $this->modifiedProperties[self::ORDER_ITEM_IDS] = true;

        return $this;
    }

    /**
     * @module Oms|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderItemIds()
    {
        $this->assertPropertyIsSet(self::ORDER_ITEM_IDS);

        return $this;
    }

    /**
     * @module Oms|TaxApp
     *
     * @param int|null $idSalesOrder
     *
     * @return $this
     */
    public function setIdSalesOrder(?int $idSalesOrder = null)
    {
        $this->idSalesOrder = $idSalesOrder;
        $this->modifiedProperties[self::ID_SALES_ORDER] = true;

        return $this;
    }

    /**
     * @module Oms|TaxApp
     *
     * @return int|null
     */
    public function getIdSalesOrder(): ?int
    {
        return $this->idSalesOrder;
    }

    /**
     * @module Oms|TaxApp
     *
     * @param int $idSalesOrder
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdSalesOrderOrFail(int $idSalesOrder)
    {
        return $this->setIdSalesOrder($idSalesOrder);
    }

    /**
     * @module Oms|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdSalesOrderOrFail(): int
    {
        if ($this->idSalesOrder === null) {
            $this->throwNullValueException(static::ID_SALES_ORDER);
        }

        return $this->idSalesOrder;
    }

    /**
     * @module Oms|TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdSalesOrder()
    {
        $this->assertPropertyIsSet(self::ID_SALES_ORDER);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param array|null $eventData
     *
     * @return $this
     */
    public function setEventData(array $eventData = null)
    {
        if ($eventData === null) {
            $eventData = [];
        }

        $this->eventData = $eventData;
        $this->modifiedProperties[self::EVENT_DATA] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return array
     */
    public function getEventData(): array
    {
        return $this->eventData;
    }

    /**
     * @module Oms
     *
     * @param mixed $eventData
     *
     * @return $this
     */
    public function addEventData($eventData)
    {
        $this->eventData[] = $eventData;
        $this->modifiedProperties[self::EVENT_DATA] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEventData()
    {
        $this->assertPropertyIsSet(self::EVENT_DATA);

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
                case 'idEvent':
                case 'orderItemIds':
                case 'idSalesOrder':
                case 'eventData':
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
                case 'idEvent':
                case 'orderItemIds':
                case 'idSalesOrder':
                case 'eventData':
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
                case 'idEvent':
                case 'orderItemIds':
                case 'idSalesOrder':
                case 'eventData':
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
            'idEvent' => $this->idEvent,
            'orderItemIds' => $this->orderItemIds,
            'idSalesOrder' => $this->idSalesOrder,
            'eventData' => $this->eventData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_event' => $this->idEvent,
            'order_item_ids' => $this->orderItemIds,
            'id_sales_order' => $this->idSalesOrder,
            'event_data' => $this->eventData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_event' => $this->idEvent instanceof AbstractTransfer ? $this->idEvent->toArray(true, false) : $this->idEvent,
            'order_item_ids' => $this->orderItemIds instanceof AbstractTransfer ? $this->orderItemIds->toArray(true, false) : $this->orderItemIds,
            'id_sales_order' => $this->idSalesOrder instanceof AbstractTransfer ? $this->idSalesOrder->toArray(true, false) : $this->idSalesOrder,
            'event_data' => $this->eventData instanceof AbstractTransfer ? $this->eventData->toArray(true, false) : $this->eventData,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idEvent' => $this->idEvent instanceof AbstractTransfer ? $this->idEvent->toArray(true, true) : $this->idEvent,
            'orderItemIds' => $this->orderItemIds instanceof AbstractTransfer ? $this->orderItemIds->toArray(true, true) : $this->orderItemIds,
            'idSalesOrder' => $this->idSalesOrder instanceof AbstractTransfer ? $this->idSalesOrder->toArray(true, true) : $this->idSalesOrder,
            'eventData' => $this->eventData instanceof AbstractTransfer ? $this->eventData->toArray(true, true) : $this->eventData,
        ];
    }
}
