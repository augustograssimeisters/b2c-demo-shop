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
class SpyWishlistEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_WISHLIST = 'idWishlist';

    /**
     * @var string
     */
    public const FK_CUSTOMER = 'fkCustomer';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SPY_CUSTOMER = 'spyCustomer';

    /**
     * @var string
     */
    public const SPY_WISHLIST_ITEMS = 'spyWishlistItems';

    /**
     * @var integer|null
     */
    protected $idWishlist;

    /**
     * @var integer|null
     */
    protected $fkCustomer;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var \Generated\Shared\Transfer\SpyCustomerEntityTransfer|null
     */
    protected $spyCustomer;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyWishlistItemEntityTransfer>
     */
    protected $spyWishlistItems;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_wishlist' => 'idWishlist',
        'idWishlist' => 'idWishlist',
        'IdWishlist' => 'idWishlist',
        'fk_customer' => 'fkCustomer',
        'fkCustomer' => 'fkCustomer',
        'FkCustomer' => 'fkCustomer',
        'name' => 'name',
        'Name' => 'name',
        'spy_customer' => 'spyCustomer',
        'spyCustomer' => 'spyCustomer',
        'SpyCustomer' => 'spyCustomer',
        'spy_wishlist_items' => 'spyWishlistItems',
        'spyWishlistItems' => 'spyWishlistItems',
        'SpyWishlistItems' => 'spyWishlistItems',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_WISHLIST => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_wishlist',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_CUSTOMER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_customer',
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
        self::SPY_CUSTOMER => [
            'type' => 'Generated\Shared\Transfer\SpyCustomerEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_customer',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_WISHLIST_ITEMS => [
            'type' => 'Generated\Shared\Transfer\SpyWishlistItemEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_wishlist_items',
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
    public static $entityNamespace = 'Orm\Zed\Wishlist\Persistence\SpyWishlist';


    /**
     * @module 
     *
     * @param integer|null $idWishlist
     *
     * @return $this
     */
    public function setIdWishlist($idWishlist)
    {
        $this->idWishlist = $idWishlist;
        $this->modifiedProperties[self::ID_WISHLIST] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdWishlist()
    {
        return $this->idWishlist;
    }

    /**
     * @module 
     *
     * @param integer|null $idWishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdWishlistOrFail($idWishlist)
    {
        if ($idWishlist === null) {
            $this->throwNullValueException(static::ID_WISHLIST);
        }

        return $this->setIdWishlist($idWishlist);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdWishlistOrFail()
    {
        if ($this->idWishlist === null) {
            $this->throwNullValueException(static::ID_WISHLIST);
        }

        return $this->idWishlist;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdWishlist()
    {
        $this->assertPropertyIsSet(self::ID_WISHLIST);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCustomer
     *
     * @return $this
     */
    public function setFkCustomer($fkCustomer)
    {
        $this->fkCustomer = $fkCustomer;
        $this->modifiedProperties[self::FK_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkCustomer()
    {
        return $this->fkCustomer;
    }

    /**
     * @module 
     *
     * @param integer|null $fkCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkCustomerOrFail($fkCustomer)
    {
        if ($fkCustomer === null) {
            $this->throwNullValueException(static::FK_CUSTOMER);
        }

        return $this->setFkCustomer($fkCustomer);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkCustomerOrFail()
    {
        if ($this->fkCustomer === null) {
            $this->throwNullValueException(static::FK_CUSTOMER);
        }

        return $this->fkCustomer;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkCustomer()
    {
        $this->assertPropertyIsSet(self::FK_CUSTOMER);

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
     * @param \Generated\Shared\Transfer\SpyCustomerEntityTransfer|null $spyCustomer
     *
     * @return $this
     */
    public function setSpyCustomer(SpyCustomerEntityTransfer $spyCustomer = null)
    {
        $this->spyCustomer = $spyCustomer;
        $this->modifiedProperties[self::SPY_CUSTOMER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyCustomerEntityTransfer|null
     */
    public function getSpyCustomer()
    {
        return $this->spyCustomer;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerEntityTransfer $spyCustomer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyCustomerOrFail(SpyCustomerEntityTransfer $spyCustomer)
    {
        return $this->setSpyCustomer($spyCustomer);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyCustomerEntityTransfer
     */
    public function getSpyCustomerOrFail()
    {
        if ($this->spyCustomer === null) {
            $this->throwNullValueException(static::SPY_CUSTOMER);
        }

        return $this->spyCustomer;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCustomer()
    {
        $this->assertPropertyIsSet(self::SPY_CUSTOMER);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyWishlistItemEntityTransfer> $spyWishlistItems
     *
     * @return $this
     */
    public function setSpyWishlistItems(ArrayObject $spyWishlistItems)
    {
        $this->spyWishlistItems = $spyWishlistItems;
        $this->modifiedProperties[self::SPY_WISHLIST_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyWishlistItemEntityTransfer>
     */
    public function getSpyWishlistItems()
    {
        return $this->spyWishlistItems;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyWishlistItemEntityTransfer $spyWishlistItems
     *
     * @return $this
     */
    public function addSpyWishlistItems(SpyWishlistItemEntityTransfer $spyWishlistItems)
    {
        $this->spyWishlistItems[] = $spyWishlistItems;
        $this->modifiedProperties[self::SPY_WISHLIST_ITEMS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyWishlistItems()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_WISHLIST_ITEMS);

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
                case 'idWishlist':
                case 'fkCustomer':
                case 'name':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyCustomer':
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
                case 'spyWishlistItems':
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
                case 'idWishlist':
                case 'fkCustomer':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCustomer':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'spyWishlistItems':
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
                case 'idWishlist':
                case 'fkCustomer':
                case 'name':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyCustomer':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'spyWishlistItems':
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
        $this->spyWishlistItems = $this->spyWishlistItems ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idWishlist' => $this->idWishlist,
            'fkCustomer' => $this->fkCustomer,
            'name' => $this->name,
            'spyCustomer' => $this->spyCustomer,
            'spyWishlistItems' => $this->spyWishlistItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_wishlist' => $this->idWishlist,
            'fk_customer' => $this->fkCustomer,
            'name' => $this->name,
            'spy_customer' => $this->spyCustomer,
            'spy_wishlist_items' => $this->spyWishlistItems,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_wishlist' => $this->idWishlist instanceof AbstractTransfer ? $this->idWishlist->toArray(true, false) : $this->idWishlist,
            'fk_customer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, false) : $this->fkCustomer,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'spy_customer' => $this->spyCustomer instanceof AbstractTransfer ? $this->spyCustomer->toArray(true, false) : $this->spyCustomer,
            'spy_wishlist_items' => $this->spyWishlistItems instanceof AbstractTransfer ? $this->spyWishlistItems->toArray(true, false) : $this->addValuesToCollection($this->spyWishlistItems, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idWishlist' => $this->idWishlist instanceof AbstractTransfer ? $this->idWishlist->toArray(true, true) : $this->idWishlist,
            'fkCustomer' => $this->fkCustomer instanceof AbstractTransfer ? $this->fkCustomer->toArray(true, true) : $this->fkCustomer,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'spyCustomer' => $this->spyCustomer instanceof AbstractTransfer ? $this->spyCustomer->toArray(true, true) : $this->spyCustomer,
            'spyWishlistItems' => $this->spyWishlistItems instanceof AbstractTransfer ? $this->spyWishlistItems->toArray(true, true) : $this->addValuesToCollection($this->spyWishlistItems, true, true),
        ];
    }
}
