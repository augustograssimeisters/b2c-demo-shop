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
class PyzAntelopeSearchEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_ANTELOPE_SEARCH = 'idAntelopeSearch';

    /**
     * @var string
     */
    public const FK_ANTELOPE = 'fkAntelope';

    /**
     * @var string|null
     */
    protected $idAntelopeSearch;

    /**
     * @var integer|null
     */
    protected $fkAntelope;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_antelope_search' => 'idAntelopeSearch',
        'idAntelopeSearch' => 'idAntelopeSearch',
        'IdAntelopeSearch' => 'idAntelopeSearch',
        'fk_antelope' => 'fkAntelope',
        'fkAntelope' => 'fkAntelope',
        'FkAntelope' => 'fkAntelope',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_ANTELOPE_SEARCH => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'id_antelope_search',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_ANTELOPE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_antelope',
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
    public static $entityNamespace = 'Orm\Zed\AntelopeSearch\Persistence\PyzAntelopeSearch';


    /**
     * @module 
     *
     * @param string|null $idAntelopeSearch
     *
     * @return $this
     */
    public function setIdAntelopeSearch($idAntelopeSearch)
    {
        $this->idAntelopeSearch = $idAntelopeSearch;
        $this->modifiedProperties[self::ID_ANTELOPE_SEARCH] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIdAntelopeSearch()
    {
        return $this->idAntelopeSearch;
    }

    /**
     * @module 
     *
     * @param string|null $idAntelopeSearch
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdAntelopeSearchOrFail($idAntelopeSearch)
    {
        if ($idAntelopeSearch === null) {
            $this->throwNullValueException(static::ID_ANTELOPE_SEARCH);
        }

        return $this->setIdAntelopeSearch($idAntelopeSearch);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIdAntelopeSearchOrFail()
    {
        if ($this->idAntelopeSearch === null) {
            $this->throwNullValueException(static::ID_ANTELOPE_SEARCH);
        }

        return $this->idAntelopeSearch;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdAntelopeSearch()
    {
        $this->assertPropertyIsSet(self::ID_ANTELOPE_SEARCH);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkAntelope
     *
     * @return $this
     */
    public function setFkAntelope($fkAntelope)
    {
        $this->fkAntelope = $fkAntelope;
        $this->modifiedProperties[self::FK_ANTELOPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkAntelope()
    {
        return $this->fkAntelope;
    }

    /**
     * @module 
     *
     * @param integer|null $fkAntelope
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkAntelopeOrFail($fkAntelope)
    {
        if ($fkAntelope === null) {
            $this->throwNullValueException(static::FK_ANTELOPE);
        }

        return $this->setFkAntelope($fkAntelope);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkAntelopeOrFail()
    {
        if ($this->fkAntelope === null) {
            $this->throwNullValueException(static::FK_ANTELOPE);
        }

        return $this->fkAntelope;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkAntelope()
    {
        $this->assertPropertyIsSet(self::FK_ANTELOPE);

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
                case 'idAntelopeSearch':
                case 'fkAntelope':
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
                case 'idAntelopeSearch':
                case 'fkAntelope':
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
                case 'idAntelopeSearch':
                case 'fkAntelope':
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
            'idAntelopeSearch' => $this->idAntelopeSearch,
            'fkAntelope' => $this->fkAntelope,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_antelope_search' => $this->idAntelopeSearch,
            'fk_antelope' => $this->fkAntelope,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_antelope_search' => $this->idAntelopeSearch instanceof AbstractTransfer ? $this->idAntelopeSearch->toArray(true, false) : $this->idAntelopeSearch,
            'fk_antelope' => $this->fkAntelope instanceof AbstractTransfer ? $this->fkAntelope->toArray(true, false) : $this->fkAntelope,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idAntelopeSearch' => $this->idAntelopeSearch instanceof AbstractTransfer ? $this->idAntelopeSearch->toArray(true, true) : $this->idAntelopeSearch,
            'fkAntelope' => $this->fkAntelope instanceof AbstractTransfer ? $this->fkAntelope->toArray(true, true) : $this->fkAntelope,
        ];
    }
}
