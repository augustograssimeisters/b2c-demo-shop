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
class PyzAntelopeLocationSearchEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_ANTELOPE_LOCATION_SEARCH = 'idAntelopeLocationSearch';

    /**
     * @var string
     */
    public const FK_ANTELOPE_LOCATION = 'fkAntelopeLocation';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const LOCATION = 'location';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var integer|null
     */
    protected $idAntelopeLocationSearch;

    /**
     * @var integer|null
     */
    protected $fkAntelopeLocation;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $location;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_antelope_location_search' => 'idAntelopeLocationSearch',
        'idAntelopeLocationSearch' => 'idAntelopeLocationSearch',
        'IdAntelopeLocationSearch' => 'idAntelopeLocationSearch',
        'fk_antelope_location' => 'fkAntelopeLocation',
        'fkAntelopeLocation' => 'fkAntelopeLocation',
        'FkAntelopeLocation' => 'fkAntelopeLocation',
        'name' => 'name',
        'Name' => 'name',
        'location' => 'location',
        'Location' => 'location',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_ANTELOPE_LOCATION_SEARCH => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_antelope_location_search',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_ANTELOPE_LOCATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_antelope_location',
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
        self::LOCATION => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'location',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CREATED_AT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'created_at',
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
    public static $entityNamespace = 'Orm\Zed\AntelopeLocationSearch\Persistence\PyzAntelopeLocationSearch';


    /**
     * @module 
     *
     * @param integer|null $idAntelopeLocationSearch
     *
     * @return $this
     */
    public function setIdAntelopeLocationSearch($idAntelopeLocationSearch)
    {
        $this->idAntelopeLocationSearch = $idAntelopeLocationSearch;
        $this->modifiedProperties[self::ID_ANTELOPE_LOCATION_SEARCH] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdAntelopeLocationSearch()
    {
        return $this->idAntelopeLocationSearch;
    }

    /**
     * @module 
     *
     * @param integer|null $idAntelopeLocationSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdAntelopeLocationSearchOrFail($idAntelopeLocationSearch)
    {
        if ($idAntelopeLocationSearch === null) {
            $this->throwNullValueException(static::ID_ANTELOPE_LOCATION_SEARCH);
        }

        return $this->setIdAntelopeLocationSearch($idAntelopeLocationSearch);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdAntelopeLocationSearchOrFail()
    {
        if ($this->idAntelopeLocationSearch === null) {
            $this->throwNullValueException(static::ID_ANTELOPE_LOCATION_SEARCH);
        }

        return $this->idAntelopeLocationSearch;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdAntelopeLocationSearch()
    {
        $this->assertPropertyIsSet(self::ID_ANTELOPE_LOCATION_SEARCH);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkAntelopeLocation
     *
     * @return $this
     */
    public function setFkAntelopeLocation($fkAntelopeLocation)
    {
        $this->fkAntelopeLocation = $fkAntelopeLocation;
        $this->modifiedProperties[self::FK_ANTELOPE_LOCATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkAntelopeLocation()
    {
        return $this->fkAntelopeLocation;
    }

    /**
     * @module 
     *
     * @param integer|null $fkAntelopeLocation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkAntelopeLocationOrFail($fkAntelopeLocation)
    {
        if ($fkAntelopeLocation === null) {
            $this->throwNullValueException(static::FK_ANTELOPE_LOCATION);
        }

        return $this->setFkAntelopeLocation($fkAntelopeLocation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkAntelopeLocationOrFail()
    {
        if ($this->fkAntelopeLocation === null) {
            $this->throwNullValueException(static::FK_ANTELOPE_LOCATION);
        }

        return $this->fkAntelopeLocation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkAntelopeLocation()
    {
        $this->assertPropertyIsSet(self::FK_ANTELOPE_LOCATION);

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
     * @param string|null $location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;
        $this->modifiedProperties[self::LOCATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @module 
     *
     * @param string|null $location
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocationOrFail($location)
    {
        if ($location === null) {
            $this->throwNullValueException(static::LOCATION);
        }

        return $this->setLocation($location);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocationOrFail()
    {
        if ($this->location === null) {
            $this->throwNullValueException(static::LOCATION);
        }

        return $this->location;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocation()
    {
        $this->assertPropertyIsSet(self::LOCATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        $this->modifiedProperties[self::CREATED_AT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module 
     *
     * @param string|null $createdAt
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCreatedAtOrFail($createdAt)
    {
        if ($createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->setCreatedAt($createdAt);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCreatedAtOrFail()
    {
        if ($this->createdAt === null) {
            $this->throwNullValueException(static::CREATED_AT);
        }

        return $this->createdAt;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCreatedAt()
    {
        $this->assertPropertyIsSet(self::CREATED_AT);

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
                case 'idAntelopeLocationSearch':
                case 'fkAntelopeLocation':
                case 'name':
                case 'location':
                case 'createdAt':
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
                case 'idAntelopeLocationSearch':
                case 'fkAntelopeLocation':
                case 'name':
                case 'location':
                case 'createdAt':
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
                case 'idAntelopeLocationSearch':
                case 'fkAntelopeLocation':
                case 'name':
                case 'location':
                case 'createdAt':
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
            'idAntelopeLocationSearch' => $this->idAntelopeLocationSearch,
            'fkAntelopeLocation' => $this->fkAntelopeLocation,
            'name' => $this->name,
            'location' => $this->location,
            'createdAt' => $this->createdAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_antelope_location_search' => $this->idAntelopeLocationSearch,
            'fk_antelope_location' => $this->fkAntelopeLocation,
            'name' => $this->name,
            'location' => $this->location,
            'created_at' => $this->createdAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_antelope_location_search' => $this->idAntelopeLocationSearch instanceof AbstractTransfer ? $this->idAntelopeLocationSearch->toArray(true, false) : $this->idAntelopeLocationSearch,
            'fk_antelope_location' => $this->fkAntelopeLocation instanceof AbstractTransfer ? $this->fkAntelopeLocation->toArray(true, false) : $this->fkAntelopeLocation,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'location' => $this->location instanceof AbstractTransfer ? $this->location->toArray(true, false) : $this->location,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idAntelopeLocationSearch' => $this->idAntelopeLocationSearch instanceof AbstractTransfer ? $this->idAntelopeLocationSearch->toArray(true, true) : $this->idAntelopeLocationSearch,
            'fkAntelopeLocation' => $this->fkAntelopeLocation instanceof AbstractTransfer ? $this->fkAntelopeLocation->toArray(true, true) : $this->fkAntelopeLocation,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'location' => $this->location instanceof AbstractTransfer ? $this->location->toArray(true, true) : $this->location,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
        ];
    }
}
