<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyOmsOrderProcessEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_OMS_ORDER_PROCESS = 'idOmsOrderProcess';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_ITEMS = 'spySalesOrderItems';

    /**
     * @var string
     */
    public const SPY_OMS_TRANSITION_LOGS = 'spyOmsTransitionLogs';

    /**
     * @var integer|null
     */
    protected $idOmsOrderProcess;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer>
     */
    protected $spySalesOrderItems;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyOmsTransitionLogEntityTransfer>
     */
    protected $spyOmsTransitionLogs;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_oms_order_process' => 'idOmsOrderProcess',
        'idOmsOrderProcess' => 'idOmsOrderProcess',
        'IdOmsOrderProcess' => 'idOmsOrderProcess',
        'name' => 'name',
        'Name' => 'name',
        'spy_sales_order_items' => 'spySalesOrderItems',
        'spySalesOrderItems' => 'spySalesOrderItems',
        'SpySalesOrderItems' => 'spySalesOrderItems',
        'spy_oms_transition_logs' => 'spyOmsTransitionLogs',
        'spyOmsTransitionLogs' => 'spyOmsTransitionLogs',
        'SpyOmsTransitionLogs' => 'spyOmsTransitionLogs',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_OMS_ORDER_PROCESS => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_oms_order_process',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_ITEMS => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_items',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_OMS_TRANSITION_LOGS => [
            'type' => 'Generated\Shared\Transfer\SpyOmsTransitionLogEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_oms_transition_logs',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Oms\Persistence\SpyOmsOrderProcess';


    /**
     * @module 
     *
     * @param integer|null $idOmsOrderProcess
     *
     * @return $this
     */
    public function setIdOmsOrderProcess($idOmsOrderProcess)
    {
        $this->idOmsOrderProcess = $idOmsOrderProcess;
        $this->modifiedProperties[self::ID_OMS_ORDER_PROCESS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdOmsOrderProcess()
    {
        return $this->idOmsOrderProcess;
    }

    /**
     * @module 
     *
     * @param integer|null $idOmsOrderProcess
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdOmsOrderProcessOrFail($idOmsOrderProcess)
    {
        if ($idOmsOrderProcess === null) {
            $this->throwNullValueException(static::ID_OMS_ORDER_PROCESS);
        }

        return $this->setIdOmsOrderProcess($idOmsOrderProcess);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdOmsOrderProcessOrFail()
    {
        if ($this->idOmsOrderProcess === null) {
            $this->throwNullValueException(static::ID_OMS_ORDER_PROCESS);
        }

        return $this->idOmsOrderProcess;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdOmsOrderProcess()
    {
        $this->assertPropertyIsSet(self::ID_OMS_ORDER_PROCESS);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module 
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
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer> $spySalesOrderItems
     *
     * @return $this
     */
    public function setSpySalesOrderItems(ArrayObject $spySalesOrderItems)
    {
        $this->spySalesOrderItems = $spySalesOrderItems;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer>
     */
    public function getSpySalesOrderItems()
    {
        return $this->spySalesOrderItems;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderItemEntityTransfer $spySalesOrderItems
     *
     * @return $this
     */
    public function addSpySalesOrderItems(SpySalesOrderItemEntityTransfer $spySalesOrderItems)
    {
        $this->spySalesOrderItems[] = $spySalesOrderItems;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderItems()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_ITEMS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyOmsTransitionLogEntityTransfer> $spyOmsTransitionLogs
     *
     * @return $this
     */
    public function setSpyOmsTransitionLogs(ArrayObject $spyOmsTransitionLogs)
    {
        $this->spyOmsTransitionLogs = $spyOmsTransitionLogs;
        $this->modifiedProperties[self::SPY_OMS_TRANSITION_LOGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyOmsTransitionLogEntityTransfer>
     */
    public function getSpyOmsTransitionLogs()
    {
        return $this->spyOmsTransitionLogs;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyOmsTransitionLogEntityTransfer $spyOmsTransitionLogs
     *
     * @return $this
     */
    public function addSpyOmsTransitionLogs(SpyOmsTransitionLogEntityTransfer $spyOmsTransitionLogs)
    {
        $this->spyOmsTransitionLogs[] = $spyOmsTransitionLogs;
        $this->modifiedProperties[self::SPY_OMS_TRANSITION_LOGS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyOmsTransitionLogs()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_OMS_TRANSITION_LOGS);

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
                case 'idOmsOrderProcess':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spySalesOrderItems':
                case 'spyOmsTransitionLogs':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idOmsOrderProcess':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesOrderItems':
                case 'spyOmsTransitionLogs':
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
                case 'idOmsOrderProcess':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spySalesOrderItems':
                case 'spyOmsTransitionLogs':
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
        $this->spySalesOrderItems = $this->spySalesOrderItems ?: new ArrayObject();
        $this->spyOmsTransitionLogs = $this->spyOmsTransitionLogs ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idOmsOrderProcess' => $this->idOmsOrderProcess,
            'name' => $this->name,
            'spySalesOrderItems' => $this->spySalesOrderItems,
            'spyOmsTransitionLogs' => $this->spyOmsTransitionLogs,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_oms_order_process' => $this->idOmsOrderProcess,
            'name' => $this->name,
            'spy_sales_order_items' => $this->spySalesOrderItems,
            'spy_oms_transition_logs' => $this->spyOmsTransitionLogs,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_oms_order_process' => $this->idOmsOrderProcess instanceof AbstractTransfer ? $this->idOmsOrderProcess->toArray(true, false) : $this->idOmsOrderProcess,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_sales_order_items' => $this->spySalesOrderItems instanceof AbstractTransfer ? $this->spySalesOrderItems->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderItems, true, false),
            'spy_oms_transition_logs' => $this->spyOmsTransitionLogs instanceof AbstractTransfer ? $this->spyOmsTransitionLogs->toArray(true, false) : $this->addValuesToCollection($this->spyOmsTransitionLogs, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idOmsOrderProcess' => $this->idOmsOrderProcess instanceof AbstractTransfer ? $this->idOmsOrderProcess->toArray(true, true) : $this->idOmsOrderProcess,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spySalesOrderItems' => $this->spySalesOrderItems instanceof AbstractTransfer ? $this->spySalesOrderItems->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderItems, true, true),
            'spyOmsTransitionLogs' => $this->spyOmsTransitionLogs instanceof AbstractTransfer ? $this->spyOmsTransitionLogs->toArray(true, true) : $this->addValuesToCollection($this->spyOmsTransitionLogs, true, true),
        ];
    }
}
