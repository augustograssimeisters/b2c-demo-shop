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
class SpyStockEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_STOCK = 'idStock';

    /**
     * @var string
     */
    public const IS_ACTIVE = 'isActive';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const PICKING_LIST_STRATEGY = 'pickingListStrategy';

    /**
     * @var string
     */
    public const SPY_STOCK_PRODUCTS = 'spyStockProducts';

    /**
     * @var string
     */
    public const SPY_STOCK_STORES = 'spyStockStores';

    /**
     * @var string
     */
    public const SPY_PICKING_LISTS = 'spyPickingLists';

    /**
     * @var string
     */
    public const SPY_WAREHOUSE_USER_ASSIGNMENTS = 'spyWarehouseUserAssignments';

    /**
     * @var string
     */
    public const SPY_STOCK_ADDRESSES = 'spyStockAddresses';

    /**
     * @var string
     */
    public const SPY_WAREHOUSE_ALLOCATIONS = 'spyWarehouseAllocations';

    /**
     * @var integer|null
     */
    protected $idStock;

    /**
     * @var boolean|null
     */
    protected $isActive;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $pickingListStrategy;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyStockProductEntityTransfer>
     */
    protected $spyStockProducts;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyStockStoreEntityTransfer>
     */
    protected $spyStockStores;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyPickingListEntityTransfer>
     */
    protected $spyPickingLists;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyWarehouseUserAssignmentEntityTransfer>
     */
    protected $spyWarehouseUserAssignments;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyStockAddressEntityTransfer>
     */
    protected $spyStockAddresses;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyWarehouseAllocationEntityTransfer>
     */
    protected $spyWarehouseAllocations;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_stock' => 'idStock',
        'idStock' => 'idStock',
        'IdStock' => 'idStock',
        'is_active' => 'isActive',
        'isActive' => 'isActive',
        'IsActive' => 'isActive',
        'name' => 'name',
        'Name' => 'name',
        'picking_list_strategy' => 'pickingListStrategy',
        'pickingListStrategy' => 'pickingListStrategy',
        'PickingListStrategy' => 'pickingListStrategy',
        'spy_stock_products' => 'spyStockProducts',
        'spyStockProducts' => 'spyStockProducts',
        'SpyStockProducts' => 'spyStockProducts',
        'spy_stock_stores' => 'spyStockStores',
        'spyStockStores' => 'spyStockStores',
        'SpyStockStores' => 'spyStockStores',
        'spy_picking_lists' => 'spyPickingLists',
        'spyPickingLists' => 'spyPickingLists',
        'SpyPickingLists' => 'spyPickingLists',
        'spy_warehouse_user_assignments' => 'spyWarehouseUserAssignments',
        'spyWarehouseUserAssignments' => 'spyWarehouseUserAssignments',
        'SpyWarehouseUserAssignments' => 'spyWarehouseUserAssignments',
        'spy_stock_addresses' => 'spyStockAddresses',
        'spyStockAddresses' => 'spyStockAddresses',
        'SpyStockAddresses' => 'spyStockAddresses',
        'spy_warehouse_allocations' => 'spyWarehouseAllocations',
        'spyWarehouseAllocations' => 'spyWarehouseAllocations',
        'SpyWarehouseAllocations' => 'spyWarehouseAllocations',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_STOCK => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_stock',
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
        self::PICKING_LIST_STRATEGY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'picking_list_strategy',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_STOCK_PRODUCTS => [
            'type' => 'Generated\Shared\Transfer\SpyStockProductEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_stock_products',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_STOCK_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyStockStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_stock_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PICKING_LISTS => [
            'type' => 'Generated\Shared\Transfer\SpyPickingListEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_picking_lists',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_WAREHOUSE_USER_ASSIGNMENTS => [
            'type' => 'Generated\Shared\Transfer\SpyWarehouseUserAssignmentEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_warehouse_user_assignments',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_STOCK_ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\SpyStockAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_stock_addresses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_WAREHOUSE_ALLOCATIONS => [
            'type' => 'Generated\Shared\Transfer\SpyWarehouseAllocationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_warehouse_allocations',
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
    public static $entityNamespace = 'Orm\Zed\Stock\Persistence\SpyStock';


    /**
     * @module 
     *
     * @param integer|null $idStock
     *
     * @return $this
     */
    public function setIdStock($idStock)
    {
        $this->idStock = $idStock;
        $this->modifiedProperties[self::ID_STOCK] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdStock()
    {
        return $this->idStock;
    }

    /**
     * @module 
     *
     * @param integer|null $idStock
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdStockOrFail($idStock)
    {
        if ($idStock === null) {
            $this->throwNullValueException(static::ID_STOCK);
        }

        return $this->setIdStock($idStock);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdStockOrFail()
    {
        if ($this->idStock === null) {
            $this->throwNullValueException(static::ID_STOCK);
        }

        return $this->idStock;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdStock()
    {
        $this->assertPropertyIsSet(self::ID_STOCK);

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
     * @param string|null $pickingListStrategy
     *
     * @return $this
     */
    public function setPickingListStrategy($pickingListStrategy)
    {
        $this->pickingListStrategy = $pickingListStrategy;
        $this->modifiedProperties[self::PICKING_LIST_STRATEGY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPickingListStrategy()
    {
        return $this->pickingListStrategy;
    }

    /**
     * @module 
     *
     * @param string|null $pickingListStrategy
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPickingListStrategyOrFail($pickingListStrategy)
    {
        if ($pickingListStrategy === null) {
            $this->throwNullValueException(static::PICKING_LIST_STRATEGY);
        }

        return $this->setPickingListStrategy($pickingListStrategy);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPickingListStrategyOrFail()
    {
        if ($this->pickingListStrategy === null) {
            $this->throwNullValueException(static::PICKING_LIST_STRATEGY);
        }

        return $this->pickingListStrategy;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePickingListStrategy()
    {
        $this->assertPropertyIsSet(self::PICKING_LIST_STRATEGY);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyStockProductEntityTransfer> $spyStockProducts
     *
     * @return $this
     */
    public function setSpyStockProducts(ArrayObject $spyStockProducts)
    {
        $this->spyStockProducts = $spyStockProducts;
        $this->modifiedProperties[self::SPY_STOCK_PRODUCTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyStockProductEntityTransfer>
     */
    public function getSpyStockProducts()
    {
        return $this->spyStockProducts;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStockProductEntityTransfer $spyStockProducts
     *
     * @return $this
     */
    public function addSpyStockProducts(SpyStockProductEntityTransfer $spyStockProducts)
    {
        $this->spyStockProducts[] = $spyStockProducts;
        $this->modifiedProperties[self::SPY_STOCK_PRODUCTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyStockProducts()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_STOCK_PRODUCTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyStockStoreEntityTransfer> $spyStockStores
     *
     * @return $this
     */
    public function setSpyStockStores(ArrayObject $spyStockStores)
    {
        $this->spyStockStores = $spyStockStores;
        $this->modifiedProperties[self::SPY_STOCK_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyStockStoreEntityTransfer>
     */
    public function getSpyStockStores()
    {
        return $this->spyStockStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStockStoreEntityTransfer $spyStockStores
     *
     * @return $this
     */
    public function addSpyStockStores(SpyStockStoreEntityTransfer $spyStockStores)
    {
        $this->spyStockStores[] = $spyStockStores;
        $this->modifiedProperties[self::SPY_STOCK_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyStockStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_STOCK_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyPickingListEntityTransfer> $spyPickingLists
     *
     * @return $this
     */
    public function setSpyPickingLists(ArrayObject $spyPickingLists)
    {
        $this->spyPickingLists = $spyPickingLists;
        $this->modifiedProperties[self::SPY_PICKING_LISTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyPickingListEntityTransfer>
     */
    public function getSpyPickingLists()
    {
        return $this->spyPickingLists;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyPickingListEntityTransfer $spyPickingLists
     *
     * @return $this
     */
    public function addSpyPickingLists(SpyPickingListEntityTransfer $spyPickingLists)
    {
        $this->spyPickingLists[] = $spyPickingLists;
        $this->modifiedProperties[self::SPY_PICKING_LISTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyPickingLists()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_PICKING_LISTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyWarehouseUserAssignmentEntityTransfer> $spyWarehouseUserAssignments
     *
     * @return $this
     */
    public function setSpyWarehouseUserAssignments(ArrayObject $spyWarehouseUserAssignments)
    {
        $this->spyWarehouseUserAssignments = $spyWarehouseUserAssignments;
        $this->modifiedProperties[self::SPY_WAREHOUSE_USER_ASSIGNMENTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyWarehouseUserAssignmentEntityTransfer>
     */
    public function getSpyWarehouseUserAssignments()
    {
        return $this->spyWarehouseUserAssignments;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyWarehouseUserAssignmentEntityTransfer $spyWarehouseUserAssignments
     *
     * @return $this
     */
    public function addSpyWarehouseUserAssignments(SpyWarehouseUserAssignmentEntityTransfer $spyWarehouseUserAssignments)
    {
        $this->spyWarehouseUserAssignments[] = $spyWarehouseUserAssignments;
        $this->modifiedProperties[self::SPY_WAREHOUSE_USER_ASSIGNMENTS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyWarehouseUserAssignments()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_WAREHOUSE_USER_ASSIGNMENTS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyStockAddressEntityTransfer> $spyStockAddresses
     *
     * @return $this
     */
    public function setSpyStockAddresses(ArrayObject $spyStockAddresses)
    {
        $this->spyStockAddresses = $spyStockAddresses;
        $this->modifiedProperties[self::SPY_STOCK_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyStockAddressEntityTransfer>
     */
    public function getSpyStockAddresses()
    {
        return $this->spyStockAddresses;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStockAddressEntityTransfer $spyStockAddresses
     *
     * @return $this
     */
    public function addSpyStockAddresses(SpyStockAddressEntityTransfer $spyStockAddresses)
    {
        $this->spyStockAddresses[] = $spyStockAddresses;
        $this->modifiedProperties[self::SPY_STOCK_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyStockAddresses()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_STOCK_ADDRESSES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyWarehouseAllocationEntityTransfer> $spyWarehouseAllocations
     *
     * @return $this
     */
    public function setSpyWarehouseAllocations(ArrayObject $spyWarehouseAllocations)
    {
        $this->spyWarehouseAllocations = $spyWarehouseAllocations;
        $this->modifiedProperties[self::SPY_WAREHOUSE_ALLOCATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyWarehouseAllocationEntityTransfer>
     */
    public function getSpyWarehouseAllocations()
    {
        return $this->spyWarehouseAllocations;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyWarehouseAllocationEntityTransfer $spyWarehouseAllocations
     *
     * @return $this
     */
    public function addSpyWarehouseAllocations(SpyWarehouseAllocationEntityTransfer $spyWarehouseAllocations)
    {
        $this->spyWarehouseAllocations[] = $spyWarehouseAllocations;
        $this->modifiedProperties[self::SPY_WAREHOUSE_ALLOCATIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyWarehouseAllocations()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_WAREHOUSE_ALLOCATIONS);

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
                case 'idStock':
                case 'isActive':
                case 'name':
                case 'pickingListStrategy':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyStockProducts':
                case 'spyStockStores':
                case 'spyPickingLists':
                case 'spyWarehouseUserAssignments':
                case 'spyStockAddresses':
                case 'spyWarehouseAllocations':
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
                case 'idStock':
                case 'isActive':
                case 'name':
                case 'pickingListStrategy':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyStockProducts':
                case 'spyStockStores':
                case 'spyPickingLists':
                case 'spyWarehouseUserAssignments':
                case 'spyStockAddresses':
                case 'spyWarehouseAllocations':
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
                case 'idStock':
                case 'isActive':
                case 'name':
                case 'pickingListStrategy':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyStockProducts':
                case 'spyStockStores':
                case 'spyPickingLists':
                case 'spyWarehouseUserAssignments':
                case 'spyStockAddresses':
                case 'spyWarehouseAllocations':
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
        $this->spyStockProducts = $this->spyStockProducts ?: new ArrayObject();
        $this->spyStockStores = $this->spyStockStores ?: new ArrayObject();
        $this->spyPickingLists = $this->spyPickingLists ?: new ArrayObject();
        $this->spyWarehouseUserAssignments = $this->spyWarehouseUserAssignments ?: new ArrayObject();
        $this->spyStockAddresses = $this->spyStockAddresses ?: new ArrayObject();
        $this->spyWarehouseAllocations = $this->spyWarehouseAllocations ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idStock' => $this->idStock,
            'isActive' => $this->isActive,
            'name' => $this->name,
            'pickingListStrategy' => $this->pickingListStrategy,
            'spyStockProducts' => $this->spyStockProducts,
            'spyStockStores' => $this->spyStockStores,
            'spyPickingLists' => $this->spyPickingLists,
            'spyWarehouseUserAssignments' => $this->spyWarehouseUserAssignments,
            'spyStockAddresses' => $this->spyStockAddresses,
            'spyWarehouseAllocations' => $this->spyWarehouseAllocations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_stock' => $this->idStock,
            'is_active' => $this->isActive,
            'name' => $this->name,
            'picking_list_strategy' => $this->pickingListStrategy,
            'spy_stock_products' => $this->spyStockProducts,
            'spy_stock_stores' => $this->spyStockStores,
            'spy_picking_lists' => $this->spyPickingLists,
            'spy_warehouse_user_assignments' => $this->spyWarehouseUserAssignments,
            'spy_stock_addresses' => $this->spyStockAddresses,
            'spy_warehouse_allocations' => $this->spyWarehouseAllocations,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_stock' => $this->idStock instanceof AbstractTransfer ? $this->idStock->toArray(true, false) : $this->idStock,
            'is_active' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, false) : $this->isActive,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'picking_list_strategy' => $this->pickingListStrategy instanceof AbstractTransfer ? $this->pickingListStrategy->toArray(true, false) : $this->pickingListStrategy,
            'spy_stock_products' => $this->spyStockProducts instanceof AbstractTransfer ? $this->spyStockProducts->toArray(true, false) : $this->addValuesToCollection($this->spyStockProducts, true, false),
            'spy_stock_stores' => $this->spyStockStores instanceof AbstractTransfer ? $this->spyStockStores->toArray(true, false) : $this->addValuesToCollection($this->spyStockStores, true, false),
            'spy_picking_lists' => $this->spyPickingLists instanceof AbstractTransfer ? $this->spyPickingLists->toArray(true, false) : $this->addValuesToCollection($this->spyPickingLists, true, false),
            'spy_warehouse_user_assignments' => $this->spyWarehouseUserAssignments instanceof AbstractTransfer ? $this->spyWarehouseUserAssignments->toArray(true, false) : $this->addValuesToCollection($this->spyWarehouseUserAssignments, true, false),
            'spy_stock_addresses' => $this->spyStockAddresses instanceof AbstractTransfer ? $this->spyStockAddresses->toArray(true, false) : $this->addValuesToCollection($this->spyStockAddresses, true, false),
            'spy_warehouse_allocations' => $this->spyWarehouseAllocations instanceof AbstractTransfer ? $this->spyWarehouseAllocations->toArray(true, false) : $this->addValuesToCollection($this->spyWarehouseAllocations, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idStock' => $this->idStock instanceof AbstractTransfer ? $this->idStock->toArray(true, true) : $this->idStock,
            'isActive' => $this->isActive instanceof AbstractTransfer ? $this->isActive->toArray(true, true) : $this->isActive,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'pickingListStrategy' => $this->pickingListStrategy instanceof AbstractTransfer ? $this->pickingListStrategy->toArray(true, true) : $this->pickingListStrategy,
            'spyStockProducts' => $this->spyStockProducts instanceof AbstractTransfer ? $this->spyStockProducts->toArray(true, true) : $this->addValuesToCollection($this->spyStockProducts, true, true),
            'spyStockStores' => $this->spyStockStores instanceof AbstractTransfer ? $this->spyStockStores->toArray(true, true) : $this->addValuesToCollection($this->spyStockStores, true, true),
            'spyPickingLists' => $this->spyPickingLists instanceof AbstractTransfer ? $this->spyPickingLists->toArray(true, true) : $this->addValuesToCollection($this->spyPickingLists, true, true),
            'spyWarehouseUserAssignments' => $this->spyWarehouseUserAssignments instanceof AbstractTransfer ? $this->spyWarehouseUserAssignments->toArray(true, true) : $this->addValuesToCollection($this->spyWarehouseUserAssignments, true, true),
            'spyStockAddresses' => $this->spyStockAddresses instanceof AbstractTransfer ? $this->spyStockAddresses->toArray(true, true) : $this->addValuesToCollection($this->spyStockAddresses, true, true),
            'spyWarehouseAllocations' => $this->spyWarehouseAllocations instanceof AbstractTransfer ? $this->spyWarehouseAllocations->toArray(true, true) : $this->addValuesToCollection($this->spyWarehouseAllocations, true, true),
        ];
    }
}
