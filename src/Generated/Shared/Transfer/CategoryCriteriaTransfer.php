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
class CategoryCriteriaTransfer extends AbstractTransfer
{
    /**
     * @deprecated Use CategoryConditions.localeIds instead.
     */
    public const ID_LOCALE = 'idLocale';

    /**
     * @var string
     */
    public const CATEGORY_CONDITIONS = 'categoryConditions';

    /**
     * @deprecated Use CategoryConditions.categoryIds instead.
     */
    public const ID_CATEGORY = 'idCategory';

    /**
     * @deprecated Use CategoryConditions.categoryNodeIds instead.
     */
    public const ID_CATEGORY_NODE = 'idCategoryNode';

    /**
     * @deprecated Use CategoryConditions.withChildrenRecursively instead.
     */
    public const WITH_CHILDREN_RECURSIVELY = 'withChildrenRecursively';

    /**
     * @deprecated Use CategoryConditions.isMain instead.
     */
    public const IS_MAIN = 'isMain';

    /**
     * @deprecated Use CategoryConditions.localeNames instead.
     */
    public const LOCALE_NAME = 'localeName';

    /**
     * @var string
     */
    public const PAGINATION = 'pagination';

    /**
     * @deprecated Use CategoryConditions.storeNames instead.
     */
    public const STORE_NAME = 'storeName';

    /**
     * @deprecated Use CategoryConditions.withNodes instead.
     */
    public const WITH_NODES = 'withNodes';

    /**
     * @deprecated Use CategoryConditions.withChildren instead.
     */
    public const WITH_CHILDREN = 'withChildren';

    /**
     * @deprecated Use CategoryConditions.isRoot instead.
     */
    public const IS_ROOT = 'isRoot';

    /**
     * @deprecated Use Pagination.limit instead.
     */
    public const LIMIT = 'limit';

    /**
     * @deprecated Use Pagination.offset instead.
     */
    public const OFFSET = 'offset';

    /**
     * @var string
     */
    public const SORT_COLLECTION = 'sortCollection';

    /**
     * @var int|null
     */
    protected $idLocale;

    /**
     * @var \Generated\Shared\Transfer\CategoryConditionsTransfer|null
     */
    protected $categoryConditions;

    /**
     * @var int|null
     */
    protected $idCategory;

    /**
     * @var int|null
     */
    protected $idCategoryNode;

    /**
     * @var bool|null
     */
    protected $withChildrenRecursively;

    /**
     * @var bool|null
     */
    protected $isMain;

    /**
     * @var string|null
     */
    protected $localeName;

    /**
     * @var \Generated\Shared\Transfer\PaginationTransfer|null
     */
    protected $pagination;

    /**
     * @var string|null
     */
    protected $storeName;

    /**
     * @var bool|null
     */
    protected $withNodes;

    /**
     * @var bool|null
     */
    protected $withChildren;

    /**
     * @var bool|null
     */
    protected $isRoot;

    /**
     * @var int|null
     */
    protected $limit;

    /**
     * @var int|null
     */
    protected $offset;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SortTransfer>
     */
    protected $sortCollection;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_locale' => 'idLocale',
        'idLocale' => 'idLocale',
        'IdLocale' => 'idLocale',
        'category_conditions' => 'categoryConditions',
        'categoryConditions' => 'categoryConditions',
        'CategoryConditions' => 'categoryConditions',
        'id_category' => 'idCategory',
        'idCategory' => 'idCategory',
        'IdCategory' => 'idCategory',
        'id_category_node' => 'idCategoryNode',
        'idCategoryNode' => 'idCategoryNode',
        'IdCategoryNode' => 'idCategoryNode',
        'with_children_recursively' => 'withChildrenRecursively',
        'withChildrenRecursively' => 'withChildrenRecursively',
        'WithChildrenRecursively' => 'withChildrenRecursively',
        'is_main' => 'isMain',
        'isMain' => 'isMain',
        'IsMain' => 'isMain',
        'locale_name' => 'localeName',
        'localeName' => 'localeName',
        'LocaleName' => 'localeName',
        'pagination' => 'pagination',
        'Pagination' => 'pagination',
        'store_name' => 'storeName',
        'storeName' => 'storeName',
        'StoreName' => 'storeName',
        'with_nodes' => 'withNodes',
        'withNodes' => 'withNodes',
        'WithNodes' => 'withNodes',
        'with_children' => 'withChildren',
        'withChildren' => 'withChildren',
        'WithChildren' => 'withChildren',
        'is_root' => 'isRoot',
        'isRoot' => 'isRoot',
        'IsRoot' => 'isRoot',
        'limit' => 'limit',
        'Limit' => 'limit',
        'offset' => 'offset',
        'Offset' => 'offset',
        'sort_collection' => 'sortCollection',
        'sortCollection' => 'sortCollection',
        'SortCollection' => 'sortCollection',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_LOCALE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CATEGORY_CONDITIONS => [
            'type' => 'Generated\Shared\Transfer\CategoryConditionsTransfer',
            'type_shim' => null,
            'name_underscore' => 'category_conditions',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::ID_CATEGORY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_category',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CATEGORY_NODE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_category_node',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
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
            'is_strict' => false,
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
            'is_strict' => false,
        ],
        self::LOCALE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PAGINATION => [
            'type' => 'Generated\Shared\Transfer\PaginationTransfer',
            'type_shim' => null,
            'name_underscore' => 'pagination',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::STORE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'store_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
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
            'is_strict' => false,
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
            'is_strict' => false,
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
            'is_strict' => false,
        ],
        self::LIMIT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'limit',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::OFFSET => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'offset',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SORT_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\SortTransfer',
            'type_shim' => null,
            'name_underscore' => 'sort_collection',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
    ];

    /**
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui
     *
     * @deprecated Use CategoryConditions.localeIds instead.
     *
     * @param int|null $idLocale
     *
     * @return $this
     */
    public function setIdLocale($idLocale)
    {
        $this->idLocale = $idLocale;
        $this->modifiedProperties[self::ID_LOCALE] = true;

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui
     *
     * @deprecated Use CategoryConditions.localeIds instead.
     *
     * @return int|null
     */
    public function getIdLocale()
    {
        return $this->idLocale;
    }

    /**
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui
     *
     * @deprecated Use CategoryConditions.localeIds instead.
     *
     * @param int|null $idLocale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdLocaleOrFail($idLocale)
    {
        if ($idLocale === null) {
            $this->throwNullValueException(static::ID_LOCALE);
        }

        return $this->setIdLocale($idLocale);
    }

    /**
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use CategoryConditions.localeIds instead.
     *
     * @return int
     */
    public function getIdLocaleOrFail()
    {
        if ($this->idLocale === null) {
            $this->throwNullValueException(static::ID_LOCALE);
        }

        return $this->idLocale;
    }

    /**
     * @module CategoryDiscountConnector|Category|CmsSlotBlockCategoryGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use CategoryConditions.localeIds instead.
     *
     * @return $this
     */
    public function requireIdLocale()
    {
        $this->assertPropertyIsSet(self::ID_LOCALE);

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|CategoryDynamicEntityConnector|Category|ProductsBackendApi
     *
     * @param \Generated\Shared\Transfer\CategoryConditionsTransfer|null $categoryConditions
     *
     * @return $this
     */
    public function setCategoryConditions(?CategoryConditionsTransfer $categoryConditions = null)
    {
        $this->categoryConditions = $categoryConditions;
        $this->modifiedProperties[self::CATEGORY_CONDITIONS] = true;

        return $this;
    }

    /**
     * @module CategoryDiscountConnector|CategoryDynamicEntityConnector|Category|ProductsBackendApi
     *
     * @return \Generated\Shared\Transfer\CategoryConditionsTransfer|null
     */
    public function getCategoryConditions(): ?CategoryConditionsTransfer
    {
        return $this->categoryConditions;
    }

    /**
     * @module CategoryDiscountConnector|CategoryDynamicEntityConnector|Category|ProductsBackendApi
     *
     * @param \Generated\Shared\Transfer\CategoryConditionsTransfer $categoryConditions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCategoryConditionsOrFail(CategoryConditionsTransfer $categoryConditions)
    {
        return $this->setCategoryConditions($categoryConditions);
    }

    /**
     * @module CategoryDiscountConnector|CategoryDynamicEntityConnector|Category|ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CategoryConditionsTransfer
     */
    public function getCategoryConditionsOrFail(): CategoryConditionsTransfer
    {
        if ($this->categoryConditions === null) {
            $this->throwNullValueException(static::CATEGORY_CONDITIONS);
        }

        return $this->categoryConditions;
    }

    /**
     * @module CategoryDiscountConnector|CategoryDynamicEntityConnector|Category|ProductsBackendApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCategoryConditions()
    {
        $this->assertPropertyIsSet(self::CATEGORY_CONDITIONS);

        return $this;
    }

    /**
     * @module CategoryGui|Category|ProductCategoryFilterGui
     *
     * @deprecated Use CategoryConditions.categoryIds instead.
     *
     * @param int|null $idCategory
     *
     * @return $this
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;
        $this->modifiedProperties[self::ID_CATEGORY] = true;

        return $this;
    }

    /**
     * @module CategoryGui|Category|ProductCategoryFilterGui
     *
     * @deprecated Use CategoryConditions.categoryIds instead.
     *
     * @return int|null
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * @module CategoryGui|Category|ProductCategoryFilterGui
     *
     * @deprecated Use CategoryConditions.categoryIds instead.
     *
     * @param int|null $idCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCategoryOrFail($idCategory)
    {
        if ($idCategory === null) {
            $this->throwNullValueException(static::ID_CATEGORY);
        }

        return $this->setIdCategory($idCategory);
    }

    /**
     * @module CategoryGui|Category|ProductCategoryFilterGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use CategoryConditions.categoryIds instead.
     *
     * @return int
     */
    public function getIdCategoryOrFail()
    {
        if ($this->idCategory === null) {
            $this->throwNullValueException(static::ID_CATEGORY);
        }

        return $this->idCategory;
    }

    /**
     * @module CategoryGui|Category|ProductCategoryFilterGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use CategoryConditions.categoryIds instead.
     *
     * @return $this
     */
    public function requireIdCategory()
    {
        $this->assertPropertyIsSet(self::ID_CATEGORY);

        return $this;
    }

    /**
     * @module CategoryGui|Category
     *
     * @deprecated Use CategoryConditions.categoryNodeIds instead.
     *
     * @param int|null $idCategoryNode
     *
     * @return $this
     */
    public function setIdCategoryNode($idCategoryNode)
    {
        $this->idCategoryNode = $idCategoryNode;
        $this->modifiedProperties[self::ID_CATEGORY_NODE] = true;

        return $this;
    }

    /**
     * @module CategoryGui|Category
     *
     * @deprecated Use CategoryConditions.categoryNodeIds instead.
     *
     * @return int|null
     */
    public function getIdCategoryNode()
    {
        return $this->idCategoryNode;
    }

    /**
     * @module CategoryGui|Category
     *
     * @deprecated Use CategoryConditions.categoryNodeIds instead.
     *
     * @param int|null $idCategoryNode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCategoryNodeOrFail($idCategoryNode)
    {
        if ($idCategoryNode === null) {
            $this->throwNullValueException(static::ID_CATEGORY_NODE);
        }

        return $this->setIdCategoryNode($idCategoryNode);
    }

    /**
     * @module CategoryGui|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use CategoryConditions.categoryNodeIds instead.
     *
     * @return int
     */
    public function getIdCategoryNodeOrFail()
    {
        if ($this->idCategoryNode === null) {
            $this->throwNullValueException(static::ID_CATEGORY_NODE);
        }

        return $this->idCategoryNode;
    }

    /**
     * @module CategoryGui|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use CategoryConditions.categoryNodeIds instead.
     *
     * @return $this
     */
    public function requireIdCategoryNode()
    {
        $this->assertPropertyIsSet(self::ID_CATEGORY_NODE);

        return $this;
    }

    /**
     * @module CategoryGui|Category|ProductCategoryFilterGui|ProductCategory
     *
     * @deprecated Use CategoryConditions.withChildrenRecursively instead.
     *
     * @param bool|null $withChildrenRecursively
     *
     * @return $this
     */
    public function setWithChildrenRecursively($withChildrenRecursively)
    {
        $this->withChildrenRecursively = $withChildrenRecursively;
        $this->modifiedProperties[self::WITH_CHILDREN_RECURSIVELY] = true;

        return $this;
    }

    /**
     * @module CategoryGui|Category|ProductCategoryFilterGui|ProductCategory
     *
     * @deprecated Use CategoryConditions.withChildrenRecursively instead.
     *
     * @return bool|null
     */
    public function getWithChildrenRecursively()
    {
        return $this->withChildrenRecursively;
    }

    /**
     * @module CategoryGui|Category|ProductCategoryFilterGui|ProductCategory
     *
     * @deprecated Use CategoryConditions.withChildrenRecursively instead.
     *
     * @param bool|null $withChildrenRecursively
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithChildrenRecursivelyOrFail($withChildrenRecursively)
    {
        if ($withChildrenRecursively === null) {
            $this->throwNullValueException(static::WITH_CHILDREN_RECURSIVELY);
        }

        return $this->setWithChildrenRecursively($withChildrenRecursively);
    }

    /**
     * @module CategoryGui|Category|ProductCategoryFilterGui|ProductCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use CategoryConditions.withChildrenRecursively instead.
     *
     * @return bool
     */
    public function getWithChildrenRecursivelyOrFail()
    {
        if ($this->withChildrenRecursively === null) {
            $this->throwNullValueException(static::WITH_CHILDREN_RECURSIVELY);
        }

        return $this->withChildrenRecursively;
    }

    /**
     * @module CategoryGui|Category|ProductCategoryFilterGui|ProductCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use CategoryConditions.withChildrenRecursively instead.
     *
     * @return $this
     */
    public function requireWithChildrenRecursively()
    {
        $this->assertPropertyIsSet(self::WITH_CHILDREN_RECURSIVELY);

        return $this;
    }

    /**
     * @module CategoryGui|Category
     *
     * @deprecated Use CategoryConditions.isMain instead.
     *
     * @param bool|null $isMain
     *
     * @return $this
     */
    public function setIsMain($isMain)
    {
        $this->isMain = $isMain;
        $this->modifiedProperties[self::IS_MAIN] = true;

        return $this;
    }

    /**
     * @module CategoryGui|Category
     *
     * @deprecated Use CategoryConditions.isMain instead.
     *
     * @return bool|null
     */
    public function getIsMain()
    {
        return $this->isMain;
    }

    /**
     * @module CategoryGui|Category
     *
     * @deprecated Use CategoryConditions.isMain instead.
     *
     * @param bool|null $isMain
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsMainOrFail($isMain)
    {
        if ($isMain === null) {
            $this->throwNullValueException(static::IS_MAIN);
        }

        return $this->setIsMain($isMain);
    }

    /**
     * @module CategoryGui|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use CategoryConditions.isMain instead.
     *
     * @return bool
     */
    public function getIsMainOrFail()
    {
        if ($this->isMain === null) {
            $this->throwNullValueException(static::IS_MAIN);
        }

        return $this->isMain;
    }

    /**
     * @module CategoryGui|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use CategoryConditions.isMain instead.
     *
     * @return $this
     */
    public function requireIsMain()
    {
        $this->assertPropertyIsSet(self::IS_MAIN);

        return $this;
    }

    /**
     * @module CategoryGui|Category|ProductCategoryFilterGui
     *
     * @deprecated Use CategoryConditions.localeNames instead.
     *
     * @param string|null $localeName
     *
     * @return $this
     */
    public function setLocaleName($localeName)
    {
        $this->localeName = $localeName;
        $this->modifiedProperties[self::LOCALE_NAME] = true;

        return $this;
    }

    /**
     * @module CategoryGui|Category|ProductCategoryFilterGui
     *
     * @deprecated Use CategoryConditions.localeNames instead.
     *
     * @return string|null
     */
    public function getLocaleName()
    {
        return $this->localeName;
    }

    /**
     * @module CategoryGui|Category|ProductCategoryFilterGui
     *
     * @deprecated Use CategoryConditions.localeNames instead.
     *
     * @param string|null $localeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleNameOrFail($localeName)
    {
        if ($localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->setLocaleName($localeName);
    }

    /**
     * @module CategoryGui|Category|ProductCategoryFilterGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use CategoryConditions.localeNames instead.
     *
     * @return string
     */
    public function getLocaleNameOrFail()
    {
        if ($this->localeName === null) {
            $this->throwNullValueException(static::LOCALE_NAME);
        }

        return $this->localeName;
    }

    /**
     * @module CategoryGui|Category|ProductCategoryFilterGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use CategoryConditions.localeNames instead.
     *
     * @return $this
     */
    public function requireLocaleName()
    {
        $this->assertPropertyIsSet(self::LOCALE_NAME);

        return $this;
    }

    /**
     * @module CategoryImageStorage|Category
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer|null $pagination
     *
     * @return $this
     */
    public function setPagination(?PaginationTransfer $pagination = null)
    {
        $this->pagination = $pagination;
        $this->modifiedProperties[self::PAGINATION] = true;

        return $this;
    }

    /**
     * @module CategoryImageStorage|Category
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer|null
     */
    public function getPagination(): ?PaginationTransfer
    {
        return $this->pagination;
    }

    /**
     * @module CategoryImageStorage|Category
     *
     * @param \Generated\Shared\Transfer\PaginationTransfer $pagination
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPaginationOrFail(PaginationTransfer $pagination)
    {
        return $this->setPagination($pagination);
    }

    /**
     * @module CategoryImageStorage|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PaginationTransfer
     */
    public function getPaginationOrFail(): PaginationTransfer
    {
        if ($this->pagination === null) {
            $this->throwNullValueException(static::PAGINATION);
        }

        return $this->pagination;
    }

    /**
     * @module CategoryImageStorage|Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePagination()
    {
        $this->assertPropertyIsSet(self::PAGINATION);

        return $this;
    }

    /**
     * @module Category
     *
     * @deprecated Use CategoryConditions.storeNames instead.
     *
     * @param string|null $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        $this->modifiedProperties[self::STORE_NAME] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @deprecated Use CategoryConditions.storeNames instead.
     *
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * @module Category
     *
     * @deprecated Use CategoryConditions.storeNames instead.
     *
     * @param string|null $storeName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreNameOrFail($storeName)
    {
        if ($storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->setStoreName($storeName);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use CategoryConditions.storeNames instead.
     *
     * @return string
     */
    public function getStoreNameOrFail()
    {
        if ($this->storeName === null) {
            $this->throwNullValueException(static::STORE_NAME);
        }

        return $this->storeName;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use CategoryConditions.storeNames instead.
     *
     * @return $this
     */
    public function requireStoreName()
    {
        $this->assertPropertyIsSet(self::STORE_NAME);

        return $this;
    }

    /**
     * @module Category
     *
     * @deprecated Use CategoryConditions.withNodes instead.
     *
     * @param bool|null $withNodes
     *
     * @return $this
     */
    public function setWithNodes($withNodes)
    {
        $this->withNodes = $withNodes;
        $this->modifiedProperties[self::WITH_NODES] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @deprecated Use CategoryConditions.withNodes instead.
     *
     * @return bool|null
     */
    public function getWithNodes()
    {
        return $this->withNodes;
    }

    /**
     * @module Category
     *
     * @deprecated Use CategoryConditions.withNodes instead.
     *
     * @param bool|null $withNodes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithNodesOrFail($withNodes)
    {
        if ($withNodes === null) {
            $this->throwNullValueException(static::WITH_NODES);
        }

        return $this->setWithNodes($withNodes);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use CategoryConditions.withNodes instead.
     *
     * @return bool
     */
    public function getWithNodesOrFail()
    {
        if ($this->withNodes === null) {
            $this->throwNullValueException(static::WITH_NODES);
        }

        return $this->withNodes;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use CategoryConditions.withNodes instead.
     *
     * @return $this
     */
    public function requireWithNodes()
    {
        $this->assertPropertyIsSet(self::WITH_NODES);

        return $this;
    }

    /**
     * @module Category
     *
     * @deprecated Use CategoryConditions.withChildren instead.
     *
     * @param bool|null $withChildren
     *
     * @return $this
     */
    public function setWithChildren($withChildren)
    {
        $this->withChildren = $withChildren;
        $this->modifiedProperties[self::WITH_CHILDREN] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @deprecated Use CategoryConditions.withChildren instead.
     *
     * @return bool|null
     */
    public function getWithChildren()
    {
        return $this->withChildren;
    }

    /**
     * @module Category
     *
     * @deprecated Use CategoryConditions.withChildren instead.
     *
     * @param bool|null $withChildren
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWithChildrenOrFail($withChildren)
    {
        if ($withChildren === null) {
            $this->throwNullValueException(static::WITH_CHILDREN);
        }

        return $this->setWithChildren($withChildren);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use CategoryConditions.withChildren instead.
     *
     * @return bool
     */
    public function getWithChildrenOrFail()
    {
        if ($this->withChildren === null) {
            $this->throwNullValueException(static::WITH_CHILDREN);
        }

        return $this->withChildren;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use CategoryConditions.withChildren instead.
     *
     * @return $this
     */
    public function requireWithChildren()
    {
        $this->assertPropertyIsSet(self::WITH_CHILDREN);

        return $this;
    }

    /**
     * @module Category|ProductCategory
     *
     * @deprecated Use CategoryConditions.isRoot instead.
     *
     * @param bool|null $isRoot
     *
     * @return $this
     */
    public function setIsRoot($isRoot)
    {
        $this->isRoot = $isRoot;
        $this->modifiedProperties[self::IS_ROOT] = true;

        return $this;
    }

    /**
     * @module Category|ProductCategory
     *
     * @deprecated Use CategoryConditions.isRoot instead.
     *
     * @return bool|null
     */
    public function getIsRoot()
    {
        return $this->isRoot;
    }

    /**
     * @module Category|ProductCategory
     *
     * @deprecated Use CategoryConditions.isRoot instead.
     *
     * @param bool|null $isRoot
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsRootOrFail($isRoot)
    {
        if ($isRoot === null) {
            $this->throwNullValueException(static::IS_ROOT);
        }

        return $this->setIsRoot($isRoot);
    }

    /**
     * @module Category|ProductCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use CategoryConditions.isRoot instead.
     *
     * @return bool
     */
    public function getIsRootOrFail()
    {
        if ($this->isRoot === null) {
            $this->throwNullValueException(static::IS_ROOT);
        }

        return $this->isRoot;
    }

    /**
     * @module Category|ProductCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use CategoryConditions.isRoot instead.
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
     * @deprecated Use Pagination.limit instead.
     *
     * @param int|null $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        $this->modifiedProperties[self::LIMIT] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @deprecated Use Pagination.limit instead.
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @module Category
     *
     * @deprecated Use Pagination.limit instead.
     *
     * @param int|null $limit
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLimitOrFail($limit)
    {
        if ($limit === null) {
            $this->throwNullValueException(static::LIMIT);
        }

        return $this->setLimit($limit);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use Pagination.limit instead.
     *
     * @return int
     */
    public function getLimitOrFail()
    {
        if ($this->limit === null) {
            $this->throwNullValueException(static::LIMIT);
        }

        return $this->limit;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use Pagination.limit instead.
     *
     * @return $this
     */
    public function requireLimit()
    {
        $this->assertPropertyIsSet(self::LIMIT);

        return $this;
    }

    /**
     * @module Category
     *
     * @deprecated Use Pagination.offset instead.
     *
     * @param int|null $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        $this->modifiedProperties[self::OFFSET] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @deprecated Use Pagination.offset instead.
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @module Category
     *
     * @deprecated Use Pagination.offset instead.
     *
     * @param int|null $offset
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOffsetOrFail($offset)
    {
        if ($offset === null) {
            $this->throwNullValueException(static::OFFSET);
        }

        return $this->setOffset($offset);
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Use Pagination.offset instead.
     *
     * @return int
     */
    public function getOffsetOrFail()
    {
        if ($this->offset === null) {
            $this->throwNullValueException(static::OFFSET);
        }

        return $this->offset;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Use Pagination.offset instead.
     *
     * @return $this
     */
    public function requireOffset()
    {
        $this->assertPropertyIsSet(self::OFFSET);

        return $this;
    }

    /**
     * @module Category
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SortTransfer> $sortCollection
     *
     * @return $this
     */
    public function setSortCollection(ArrayObject $sortCollection)
    {
        $this->sortCollection = new ArrayObject();

        foreach ($sortCollection as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::SORT_COLLECTION]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addSort(...$args);
        }

        $this->modifiedProperties[self::SORT_COLLECTION] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SortTransfer>
     */
    public function getSortCollection(): ArrayObject
    {
        return $this->sortCollection;
    }

    /**
     * @module Category
     *
     * @param \Generated\Shared\Transfer\SortTransfer $sort
     *
     * @return $this
     */
    public function addSort(SortTransfer $sort)
    {
        $this->sortCollection[] = $sort;
        $this->modifiedProperties[self::SORT_COLLECTION] = true;

        return $this;
    }

    /**
     * @module Category
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSortCollection()
    {
        $this->assertCollectionPropertyIsSet(self::SORT_COLLECTION);

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
                case 'idLocale':
                case 'idCategory':
                case 'idCategoryNode':
                case 'withChildrenRecursively':
                case 'isMain':
                case 'localeName':
                case 'storeName':
                case 'withNodes':
                case 'withChildren':
                case 'isRoot':
                case 'limit':
                case 'offset':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'categoryConditions':
                case 'pagination':
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
                case 'sortCollection':
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
                case 'idLocale':
                case 'idCategory':
                case 'idCategoryNode':
                case 'withChildrenRecursively':
                case 'isMain':
                case 'localeName':
                case 'storeName':
                case 'withNodes':
                case 'withChildren':
                case 'isRoot':
                case 'limit':
                case 'offset':
                    $values[$arrayKey] = $value;

                    break;
                case 'categoryConditions':
                case 'pagination':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'sortCollection':
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
                case 'idLocale':
                case 'idCategory':
                case 'idCategoryNode':
                case 'withChildrenRecursively':
                case 'isMain':
                case 'localeName':
                case 'storeName':
                case 'withNodes':
                case 'withChildren':
                case 'isRoot':
                case 'limit':
                case 'offset':
                    $values[$arrayKey] = $value;

                    break;
                case 'categoryConditions':
                case 'pagination':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'sortCollection':
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
        $this->sortCollection = $this->sortCollection ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idLocale' => $this->idLocale,
            'idCategory' => $this->idCategory,
            'idCategoryNode' => $this->idCategoryNode,
            'withChildrenRecursively' => $this->withChildrenRecursively,
            'isMain' => $this->isMain,
            'localeName' => $this->localeName,
            'storeName' => $this->storeName,
            'withNodes' => $this->withNodes,
            'withChildren' => $this->withChildren,
            'isRoot' => $this->isRoot,
            'limit' => $this->limit,
            'offset' => $this->offset,
            'categoryConditions' => $this->categoryConditions,
            'pagination' => $this->pagination,
            'sortCollection' => $this->sortCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_locale' => $this->idLocale,
            'id_category' => $this->idCategory,
            'id_category_node' => $this->idCategoryNode,
            'with_children_recursively' => $this->withChildrenRecursively,
            'is_main' => $this->isMain,
            'locale_name' => $this->localeName,
            'store_name' => $this->storeName,
            'with_nodes' => $this->withNodes,
            'with_children' => $this->withChildren,
            'is_root' => $this->isRoot,
            'limit' => $this->limit,
            'offset' => $this->offset,
            'category_conditions' => $this->categoryConditions,
            'pagination' => $this->pagination,
            'sort_collection' => $this->sortCollection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_locale' => $this->idLocale instanceof AbstractTransfer ? $this->idLocale->toArray(true, false) : $this->idLocale,
            'id_category' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, false) : $this->idCategory,
            'id_category_node' => $this->idCategoryNode instanceof AbstractTransfer ? $this->idCategoryNode->toArray(true, false) : $this->idCategoryNode,
            'with_children_recursively' => $this->withChildrenRecursively instanceof AbstractTransfer ? $this->withChildrenRecursively->toArray(true, false) : $this->withChildrenRecursively,
            'is_main' => $this->isMain instanceof AbstractTransfer ? $this->isMain->toArray(true, false) : $this->isMain,
            'locale_name' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, false) : $this->localeName,
            'store_name' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, false) : $this->storeName,
            'with_nodes' => $this->withNodes instanceof AbstractTransfer ? $this->withNodes->toArray(true, false) : $this->withNodes,
            'with_children' => $this->withChildren instanceof AbstractTransfer ? $this->withChildren->toArray(true, false) : $this->withChildren,
            'is_root' => $this->isRoot instanceof AbstractTransfer ? $this->isRoot->toArray(true, false) : $this->isRoot,
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, false) : $this->limit,
            'offset' => $this->offset instanceof AbstractTransfer ? $this->offset->toArray(true, false) : $this->offset,
            'category_conditions' => $this->categoryConditions instanceof AbstractTransfer ? $this->categoryConditions->toArray(true, false) : $this->categoryConditions,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, false) : $this->pagination,
            'sort_collection' => $this->sortCollection instanceof AbstractTransfer ? $this->sortCollection->toArray(true, false) : $this->addValuesToCollection($this->sortCollection, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idLocale' => $this->idLocale instanceof AbstractTransfer ? $this->idLocale->toArray(true, true) : $this->idLocale,
            'idCategory' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, true) : $this->idCategory,
            'idCategoryNode' => $this->idCategoryNode instanceof AbstractTransfer ? $this->idCategoryNode->toArray(true, true) : $this->idCategoryNode,
            'withChildrenRecursively' => $this->withChildrenRecursively instanceof AbstractTransfer ? $this->withChildrenRecursively->toArray(true, true) : $this->withChildrenRecursively,
            'isMain' => $this->isMain instanceof AbstractTransfer ? $this->isMain->toArray(true, true) : $this->isMain,
            'localeName' => $this->localeName instanceof AbstractTransfer ? $this->localeName->toArray(true, true) : $this->localeName,
            'storeName' => $this->storeName instanceof AbstractTransfer ? $this->storeName->toArray(true, true) : $this->storeName,
            'withNodes' => $this->withNodes instanceof AbstractTransfer ? $this->withNodes->toArray(true, true) : $this->withNodes,
            'withChildren' => $this->withChildren instanceof AbstractTransfer ? $this->withChildren->toArray(true, true) : $this->withChildren,
            'isRoot' => $this->isRoot instanceof AbstractTransfer ? $this->isRoot->toArray(true, true) : $this->isRoot,
            'limit' => $this->limit instanceof AbstractTransfer ? $this->limit->toArray(true, true) : $this->limit,
            'offset' => $this->offset instanceof AbstractTransfer ? $this->offset->toArray(true, true) : $this->offset,
            'categoryConditions' => $this->categoryConditions instanceof AbstractTransfer ? $this->categoryConditions->toArray(true, true) : $this->categoryConditions,
            'pagination' => $this->pagination instanceof AbstractTransfer ? $this->pagination->toArray(true, true) : $this->pagination,
            'sortCollection' => $this->sortCollection instanceof AbstractTransfer ? $this->sortCollection->toArray(true, true) : $this->addValuesToCollection($this->sortCollection, true, true),
        ];
    }
}
