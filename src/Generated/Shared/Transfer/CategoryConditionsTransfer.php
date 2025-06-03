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
class CategoryConditionsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const LOCALE_IDS = 'localeIds';

    /**
     * @var string
     */
    public const CATEGORY_IDS = 'categoryIds';

    /**
     * @var string
     */
    public const WITH_CHILDREN = 'withChildren';

    /**
     * @var string
     */
    public const WITH_CHILDREN_RECURSIVELY = 'withChildrenRecursively';

    /**
     * @var string
     */
    public const WITH_NODES = 'withNodes';

    /**
     * @var string
     */
    public const WITH_PARENT_CATEGORY = 'withParentCategory';

    /**
     * @var string
     */
    public const STORE_NAMES = 'storeNames';

    /**
     * @var string
     */
    public const LOCALE_NAMES = 'localeNames';

    /**
     * @var string
     */
    public const IS_MAIN = 'isMain';

    /**
     * @var string
     */
    public const IS_ROOT = 'isRoot';

    /**
     * @var string
     */
    public const CATEGORY_NODE_IDS = 'categoryNodeIds';

    /**
     * @var string
     */
    public const CATEGORY_KEYS = 'categoryKeys';

    /**
     * @var int[]
     */
    protected $localeIds = [];

    /**
     * @var int[]
     */
    protected $categoryIds = [];

    /**
     * @var bool|null
     */
    protected $withChildren;

    /**
     * @var bool|null
     */
    protected $withChildrenRecursively;

    /**
     * @var bool|null
     */
    protected $withNodes;

    /**
     * @var bool|null
     */
    protected $withParentCategory;

    /**
     * @var string[]
     */
    protected $storeNames = [];

    /**
     * @var string[]
     */
    protected $localeNames = [];

    /**
     * @var bool|null
     */
    protected $isMain;

    /**
     * @var bool|null
     */
    protected $isRoot;

    /**
     * @var int[]
     */
    protected $categoryNodeIds = [];

    /**
     * @var string[]
     */
    protected $categoryKeys = [];

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'locale_ids' => 'localeIds',
        'localeIds' => 'localeIds',
        'LocaleIds' => 'localeIds',
        'category_ids' => 'categoryIds',
        'categoryIds' => 'categoryIds',
        'CategoryIds' => 'categoryIds',
        'with_children' => 'withChildren',
        'withChildren' => 'withChildren',
        'WithChildren' => 'withChildren',
        'with_children_recursively' => 'withChildrenRecursively',
        'withChildrenRecursively' => 'withChildrenRecursively',
        'WithChildrenRecursively' => 'withChildrenRecursively',
        'with_nodes' => 'withNodes',
        'withNodes' => 'withNodes',
        'WithNodes' => 'withNodes',
        'with_parent_category' => 'withParentCategory',
        'withParentCategory' => 'withParentCategory',
        'WithParentCategory' => 'withParentCategory',
        'store_names' => 'storeNames',
        'storeNames' => 'storeNames',
        'StoreNames' => 'storeNames',
        'locale_names' => 'localeNames',
        'localeNames' => 'localeNames',
        'LocaleNames' => 'localeNames',
        'is_main' => 'isMain',
        'isMain' => 'isMain',
        'IsMain' => 'isMain',
        'is_root' => 'isRoot',
        'isRoot' => 'isRoot',
        'IsRoot' => 'isRoot',
        'category_node_ids' => 'categoryNodeIds',
        'categoryNodeIds' => 'categoryNodeIds',
        'CategoryNodeIds' => 'categoryNodeIds',
        'category_keys' => 'categoryKeys',
        'categoryKeys' => 'categoryKeys',
        'CategoryKeys' => 'categoryKeys',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::LOCALE_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'locale_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::CATEGORY_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'category_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::WITH_CHILDREN => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_children',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::WITH_CHILDREN_RECURSIVELY => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_children_recursively',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::WITH_NODES => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_nodes',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::WITH_PARENT_CATEGORY => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'with_parent_category',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::STORE_NAMES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'store_names',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::LOCALE_NAMES => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'locale_names',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_MAIN => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_main',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_ROOT => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_root',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::CATEGORY_NODE_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'category_node_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::CATEGORY_KEYS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'category_keys',
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
     * @module CategoryDiscountConnector|Category
     *
     * @param int[]|null $localeIds
     *
     * @return $this
     */
    public function setLocaleIds(array $localeIds = null)
    {
        if ($localeIds === null) {
            $localeIds = [];
        }

        $this->localeIds = [];

        foreach ($localeIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::LOCALE_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdLocale(...$args);
        }

        $this->modifiedProperties[self::LOCALE_IDS] = true;

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|Category
     *
     * @return int[]
     */
    public function getLocaleIds(): array
    {
        return $this->localeIds;
    }

    /**
     * @module CategoryDiscountConnector|Category
     *
     * @param int $idLocale
     *
     * @return $this
     */
    public function addIdLocale(int $idLocale)
    {
        $this->localeIds[] = $idLocale;
        $this->modifiedProperties[self::LOCALE_IDS] = true;

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocaleIds()
    {
        $this->assertPropertyIsSet(self::LOCALE_IDS);

        return $this;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @param int[]|null $categoryIds
     *
     * @return $this
     */
    public function setCategoryIds(array $categoryIds = null)
    {
        if ($categoryIds === null) {
            $categoryIds = [];
        }

        $this->categoryIds = [];

        foreach ($categoryIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::CATEGORY_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdCategory(...$args);
        }

        $this->modifiedProperties[self::CATEGORY_IDS] = true;

        return $this;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @return int[]
     */
    public function getCategoryIds(): array
    {
        return $this->categoryIds;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @param int $idCategory
     *
     * @return $this
     */
    public function addIdCategory(int $idCategory)
    {
        $this->categoryIds[] = $idCategory;
        $this->modifiedProperties[self::CATEGORY_IDS] = true;

        return $this;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryIds()
    {
        $this->assertPropertyIsSet(self::CATEGORY_IDS);

        return $this;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @param bool|null $withChildren
     *
     * @return $this
     */
    public function setWithChildren(?bool $withChildren = null)
    {
        $this->withChildren = $withChildren;
        $this->modifiedProperties[self::WITH_CHILDREN] = true;

        return $this;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @return bool|null
     */
    public function getWithChildren(): ?bool
    {
        return $this->withChildren;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @param bool $withChildren
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithChildrenOrFail(bool $withChildren)
    {
        return $this->setWithChildren($withChildren);
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithChildrenOrFail(): bool
    {
        if ($this->withChildren === null) {
            $this->throwNullValueException(static::WITH_CHILDREN);
        }

        return $this->withChildren;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithChildren()
    {
        $this->assertPropertyIsSet(self::WITH_CHILDREN);

        return $this;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @param bool|null $withChildrenRecursively
     *
     * @return $this
     */
    public function setWithChildrenRecursively(?bool $withChildrenRecursively = null)
    {
        $this->withChildrenRecursively = $withChildrenRecursively;
        $this->modifiedProperties[self::WITH_CHILDREN_RECURSIVELY] = true;

        return $this;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @return bool|null
     */
    public function getWithChildrenRecursively(): ?bool
    {
        return $this->withChildrenRecursively;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @param bool $withChildrenRecursively
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithChildrenRecursivelyOrFail(bool $withChildrenRecursively)
    {
        return $this->setWithChildrenRecursively($withChildrenRecursively);
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithChildrenRecursivelyOrFail(): bool
    {
        if ($this->withChildrenRecursively === null) {
            $this->throwNullValueException(static::WITH_CHILDREN_RECURSIVELY);
        }

        return $this->withChildrenRecursively;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithChildrenRecursively()
    {
        $this->assertPropertyIsSet(self::WITH_CHILDREN_RECURSIVELY);

        return $this;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @param bool|null $withNodes
     *
     * @return $this
     */
    public function setWithNodes(?bool $withNodes = null)
    {
        $this->withNodes = $withNodes;
        $this->modifiedProperties[self::WITH_NODES] = true;

        return $this;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @return bool|null
     */
    public function getWithNodes(): ?bool
    {
        return $this->withNodes;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @param bool $withNodes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithNodesOrFail(bool $withNodes)
    {
        return $this->setWithNodes($withNodes);
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithNodesOrFail(): bool
    {
        if ($this->withNodes === null) {
            $this->throwNullValueException(static::WITH_NODES);
        }

        return $this->withNodes;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithNodes()
    {
        $this->assertPropertyIsSet(self::WITH_NODES);

        return $this;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @param bool|null $withParentCategory
     *
     * @return $this
     */
    public function setWithParentCategory(?bool $withParentCategory = null)
    {
        $this->withParentCategory = $withParentCategory;
        $this->modifiedProperties[self::WITH_PARENT_CATEGORY] = true;

        return $this;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @return bool|null
     */
    public function getWithParentCategory(): ?bool
    {
        return $this->withParentCategory;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @param bool $withParentCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithParentCategoryOrFail(bool $withParentCategory)
    {
        return $this->setWithParentCategory($withParentCategory);
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getWithParentCategoryOrFail(): bool
    {
        if ($this->withParentCategory === null) {
            $this->throwNullValueException(static::WITH_PARENT_CATEGORY);
        }

        return $this->withParentCategory;
    }

    /**
     * @module CategoryDynamicEntityConnector|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWithParentCategory()
    {
        $this->assertPropertyIsSet(self::WITH_PARENT_CATEGORY);

        return $this;
    }

    /**
     * @module Category
     *
     * @param string[]|null $storeNames
     *
     * @return $this
     */
    public function setStoreNames(array $storeNames = null)
    {
        if ($storeNames === null) {
            $storeNames = [];
        }

        $this->storeNames = [];

        foreach ($storeNames as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::STORE_NAMES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addStoreName(...$args);
        }

        $this->modifiedProperties[self::STORE_NAMES] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return string[]
     */
    public function getStoreNames(): array
    {
        return $this->storeNames;
    }

    /**
     * @module Category
     *
     * @param string $storeName
     *
     * @return $this
     */
    public function addStoreName(string $storeName)
    {
        $this->storeNames[] = $storeName;
        $this->modifiedProperties[self::STORE_NAMES] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStoreNames()
    {
        $this->assertPropertyIsSet(self::STORE_NAMES);

        return $this;
    }

    /**
     * @module Category
     *
     * @param string[]|null $localeNames
     *
     * @return $this
     */
    public function setLocaleNames(array $localeNames = null)
    {
        if ($localeNames === null) {
            $localeNames = [];
        }

        $this->localeNames = [];

        foreach ($localeNames as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::LOCALE_NAMES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addLocaleName(...$args);
        }

        $this->modifiedProperties[self::LOCALE_NAMES] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return string[]
     */
    public function getLocaleNames(): array
    {
        return $this->localeNames;
    }

    /**
     * @module Category
     *
     * @param string $localeName
     *
     * @return $this
     */
    public function addLocaleName(string $localeName)
    {
        $this->localeNames[] = $localeName;
        $this->modifiedProperties[self::LOCALE_NAMES] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocaleNames()
    {
        $this->assertPropertyIsSet(self::LOCALE_NAMES);

        return $this;
    }

    /**
     * @module Category
     *
     * @param bool|null $isMain
     *
     * @return $this
     */
    public function setIsMain(?bool $isMain = null)
    {
        $this->isMain = $isMain;
        $this->modifiedProperties[self::IS_MAIN] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return bool|null
     */
    public function getIsMain(): ?bool
    {
        return $this->isMain;
    }

    /**
     * @module Category
     *
     * @param bool $isMain
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsMainOrFail(bool $isMain)
    {
        return $this->setIsMain($isMain);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsMainOrFail(): bool
    {
        if ($this->isMain === null) {
            $this->throwNullValueException(static::IS_MAIN);
        }

        return $this->isMain;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsMain()
    {
        $this->assertPropertyIsSet(self::IS_MAIN);

        return $this;
    }

    /**
     * @module Category
     *
     * @param bool|null $isRoot
     *
     * @return $this
     */
    public function setIsRoot(?bool $isRoot = null)
    {
        $this->isRoot = $isRoot;
        $this->modifiedProperties[self::IS_ROOT] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return bool|null
     */
    public function getIsRoot(): ?bool
    {
        return $this->isRoot;
    }

    /**
     * @module Category
     *
     * @param bool $isRoot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsRootOrFail(bool $isRoot)
    {
        return $this->setIsRoot($isRoot);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsRootOrFail(): bool
    {
        if ($this->isRoot === null) {
            $this->throwNullValueException(static::IS_ROOT);
        }

        return $this->isRoot;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsRoot()
    {
        $this->assertPropertyIsSet(self::IS_ROOT);

        return $this;
    }

    /**
     * @module Category
     *
     * @param int[]|null $categoryNodeIds
     *
     * @return $this
     */
    public function setCategoryNodeIds(array $categoryNodeIds = null)
    {
        if ($categoryNodeIds === null) {
            $categoryNodeIds = [];
        }

        $this->categoryNodeIds = [];

        foreach ($categoryNodeIds as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::CATEGORY_NODE_IDS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addIdCategoryNode(...$args);
        }

        $this->modifiedProperties[self::CATEGORY_NODE_IDS] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return int[]
     */
    public function getCategoryNodeIds(): array
    {
        return $this->categoryNodeIds;
    }

    /**
     * @module Category
     *
     * @param int $idCategoryNode
     *
     * @return $this
     */
    public function addIdCategoryNode(int $idCategoryNode)
    {
        $this->categoryNodeIds[] = $idCategoryNode;
        $this->modifiedProperties[self::CATEGORY_NODE_IDS] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryNodeIds()
    {
        $this->assertPropertyIsSet(self::CATEGORY_NODE_IDS);

        return $this;
    }

    /**
     * @module Category|ProductsBackendApi
     *
     * @param string[]|null $categoryKeys
     *
     * @return $this
     */
    public function setCategoryKeys(array $categoryKeys = null)
    {
        if ($categoryKeys === null) {
            $categoryKeys = [];
        }

        $this->categoryKeys = [];

        foreach ($categoryKeys as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::CATEGORY_KEYS]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addCategoryKey(...$args);
        }

        $this->modifiedProperties[self::CATEGORY_KEYS] = true;

        return $this;
    }

    /**
     * @module Category|ProductsBackendApi
     *
     * @return string[]
     */
    public function getCategoryKeys(): array
    {
        return $this->categoryKeys;
    }

    /**
     * @module Category|ProductsBackendApi
     *
     * @param string $categoryKey
     *
     * @return $this
     */
    public function addCategoryKey(string $categoryKey)
    {
        $this->categoryKeys[] = $categoryKey;
        $this->modifiedProperties[self::CATEGORY_KEYS] = true;

        return $this;
    }

    /**
     * @module Category|ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryKeys()
    {
        $this->assertPropertyIsSet(self::CATEGORY_KEYS);

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
                case 'localeIds':
                case 'categoryIds':
                case 'withChildren':
                case 'withChildrenRecursively':
                case 'withNodes':
                case 'withParentCategory':
                case 'storeNames':
                case 'localeNames':
                case 'isMain':
                case 'isRoot':
                case 'categoryNodeIds':
                case 'categoryKeys':
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
                case 'localeIds':
                case 'categoryIds':
                case 'withChildren':
                case 'withChildrenRecursively':
                case 'withNodes':
                case 'withParentCategory':
                case 'storeNames':
                case 'localeNames':
                case 'isMain':
                case 'isRoot':
                case 'categoryNodeIds':
                case 'categoryKeys':
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
                case 'localeIds':
                case 'categoryIds':
                case 'withChildren':
                case 'withChildrenRecursively':
                case 'withNodes':
                case 'withParentCategory':
                case 'storeNames':
                case 'localeNames':
                case 'isMain':
                case 'isRoot':
                case 'categoryNodeIds':
                case 'categoryKeys':
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
            'localeIds' => $this->localeIds,
            'categoryIds' => $this->categoryIds,
            'withChildren' => $this->withChildren,
            'withChildrenRecursively' => $this->withChildrenRecursively,
            'withNodes' => $this->withNodes,
            'withParentCategory' => $this->withParentCategory,
            'storeNames' => $this->storeNames,
            'localeNames' => $this->localeNames,
            'isMain' => $this->isMain,
            'isRoot' => $this->isRoot,
            'categoryNodeIds' => $this->categoryNodeIds,
            'categoryKeys' => $this->categoryKeys,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'locale_ids' => $this->localeIds,
            'category_ids' => $this->categoryIds,
            'with_children' => $this->withChildren,
            'with_children_recursively' => $this->withChildrenRecursively,
            'with_nodes' => $this->withNodes,
            'with_parent_category' => $this->withParentCategory,
            'store_names' => $this->storeNames,
            'locale_names' => $this->localeNames,
            'is_main' => $this->isMain,
            'is_root' => $this->isRoot,
            'category_node_ids' => $this->categoryNodeIds,
            'category_keys' => $this->categoryKeys,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'locale_ids' => $this->localeIds instanceof AbstractTransfer ? $this->localeIds->toArray(true, false) : $this->localeIds,
            'category_ids' => $this->categoryIds instanceof AbstractTransfer ? $this->categoryIds->toArray(true, false) : $this->categoryIds,
            'with_children' => $this->withChildren instanceof AbstractTransfer ? $this->withChildren->toArray(true, false) : $this->withChildren,
            'with_children_recursively' => $this->withChildrenRecursively instanceof AbstractTransfer ? $this->withChildrenRecursively->toArray(true, false) : $this->withChildrenRecursively,
            'with_nodes' => $this->withNodes instanceof AbstractTransfer ? $this->withNodes->toArray(true, false) : $this->withNodes,
            'with_parent_category' => $this->withParentCategory instanceof AbstractTransfer ? $this->withParentCategory->toArray(true, false) : $this->withParentCategory,
            'store_names' => $this->storeNames instanceof AbstractTransfer ? $this->storeNames->toArray(true, false) : $this->storeNames,
            'locale_names' => $this->localeNames instanceof AbstractTransfer ? $this->localeNames->toArray(true, false) : $this->localeNames,
            'is_main' => $this->isMain instanceof AbstractTransfer ? $this->isMain->toArray(true, false) : $this->isMain,
            'is_root' => $this->isRoot instanceof AbstractTransfer ? $this->isRoot->toArray(true, false) : $this->isRoot,
            'category_node_ids' => $this->categoryNodeIds instanceof AbstractTransfer ? $this->categoryNodeIds->toArray(true, false) : $this->categoryNodeIds,
            'category_keys' => $this->categoryKeys instanceof AbstractTransfer ? $this->categoryKeys->toArray(true, false) : $this->categoryKeys,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'localeIds' => $this->localeIds instanceof AbstractTransfer ? $this->localeIds->toArray(true, true) : $this->localeIds,
            'categoryIds' => $this->categoryIds instanceof AbstractTransfer ? $this->categoryIds->toArray(true, true) : $this->categoryIds,
            'withChildren' => $this->withChildren instanceof AbstractTransfer ? $this->withChildren->toArray(true, true) : $this->withChildren,
            'withChildrenRecursively' => $this->withChildrenRecursively instanceof AbstractTransfer ? $this->withChildrenRecursively->toArray(true, true) : $this->withChildrenRecursively,
            'withNodes' => $this->withNodes instanceof AbstractTransfer ? $this->withNodes->toArray(true, true) : $this->withNodes,
            'withParentCategory' => $this->withParentCategory instanceof AbstractTransfer ? $this->withParentCategory->toArray(true, true) : $this->withParentCategory,
            'storeNames' => $this->storeNames instanceof AbstractTransfer ? $this->storeNames->toArray(true, true) : $this->storeNames,
            'localeNames' => $this->localeNames instanceof AbstractTransfer ? $this->localeNames->toArray(true, true) : $this->localeNames,
            'isMain' => $this->isMain instanceof AbstractTransfer ? $this->isMain->toArray(true, true) : $this->isMain,
            'isRoot' => $this->isRoot instanceof AbstractTransfer ? $this->isRoot->toArray(true, true) : $this->isRoot,
            'categoryNodeIds' => $this->categoryNodeIds instanceof AbstractTransfer ? $this->categoryNodeIds->toArray(true, true) : $this->categoryNodeIds,
            'categoryKeys' => $this->categoryKeys instanceof AbstractTransfer ? $this->categoryKeys->toArray(true, true) : $this->categoryKeys,
        ];
    }
}
