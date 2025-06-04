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
class PyzAntelopeEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_ANTELOPE = 'idAntelope';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const FK_LOCATION = 'fkLocation';

    /**
     * @var string
     */
    public const PYZ_ANTELOPE_LOCATION = 'pyzAntelopeLocation';

    /**
     * @var integer|null
     */
    protected $idAntelope;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var integer|null
     */
    protected $fkLocation;

    /**
     * @var \Generated\Shared\Transfer\PyzAntelopeLocationEntityTransfer|null
     */
    protected $pyzAntelopeLocation;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_antelope' => 'idAntelope',
        'idAntelope' => 'idAntelope',
        'IdAntelope' => 'idAntelope',
        'name' => 'name',
        'Name' => 'name',
        'fk_location' => 'fkLocation',
        'fkLocation' => 'fkLocation',
        'FkLocation' => 'fkLocation',
        'pyz_antelope_location' => 'pyzAntelopeLocation',
        'pyzAntelopeLocation' => 'pyzAntelopeLocation',
        'PyzAntelopeLocation' => 'pyzAntelopeLocation',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_ANTELOPE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_antelope',
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
        self::FK_LOCATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_location',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PYZ_ANTELOPE_LOCATION => [
            'type' => 'Generated\Shared\Transfer\PyzAntelopeLocationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'pyz_antelope_location',
            'is_collection' => false,
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
    public static $entityNamespace = 'Orm\Zed\Antelope\Persistence\PyzAntelope';


    /**
     * @module 
     *
     * @param integer|null $idAntelope
     *
     * @return $this
     */
    public function setIdAntelope($idAntelope)
    {
        $this->idAntelope = $idAntelope;
        $this->modifiedProperties[self::ID_ANTELOPE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdAntelope()
    {
        return $this->idAntelope;
    }

    /**
     * @module 
     *
     * @param integer|null $idAntelope
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdAntelopeOrFail($idAntelope)
    {
        if ($idAntelope === null) {
            $this->throwNullValueException(static::ID_ANTELOPE);
        }

        return $this->setIdAntelope($idAntelope);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdAntelopeOrFail()
    {
        if ($this->idAntelope === null) {
            $this->throwNullValueException(static::ID_ANTELOPE);
        }

        return $this->idAntelope;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdAntelope()
    {
        $this->assertPropertyIsSet(self::ID_ANTELOPE);

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
     * @param integer|null $fkLocation
     *
     * @return $this
     */
    public function setFkLocation($fkLocation)
    {
        $this->fkLocation = $fkLocation;
        $this->modifiedProperties[self::FK_LOCATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkLocation()
    {
        return $this->fkLocation;
    }

    /**
     * @module 
     *
     * @param integer|null $fkLocation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkLocationOrFail($fkLocation)
    {
        if ($fkLocation === null) {
            $this->throwNullValueException(static::FK_LOCATION);
        }

        return $this->setFkLocation($fkLocation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkLocationOrFail()
    {
        if ($this->fkLocation === null) {
            $this->throwNullValueException(static::FK_LOCATION);
        }

        return $this->fkLocation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkLocation()
    {
        $this->assertPropertyIsSet(self::FK_LOCATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\PyzAntelopeLocationEntityTransfer|null $pyzAntelopeLocation
     *
     * @return $this
     */
    public function setPyzAntelopeLocation(PyzAntelopeLocationEntityTransfer $pyzAntelopeLocation = null)
    {
        $this->pyzAntelopeLocation = $pyzAntelopeLocation;
        $this->modifiedProperties[self::PYZ_ANTELOPE_LOCATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\PyzAntelopeLocationEntityTransfer|null
     */
    public function getPyzAntelopeLocation()
    {
        return $this->pyzAntelopeLocation;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\PyzAntelopeLocationEntityTransfer $pyzAntelopeLocation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPyzAntelopeLocationOrFail(PyzAntelopeLocationEntityTransfer $pyzAntelopeLocation)
    {
        return $this->setPyzAntelopeLocation($pyzAntelopeLocation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\PyzAntelopeLocationEntityTransfer
     */
    public function getPyzAntelopeLocationOrFail()
    {
        if ($this->pyzAntelopeLocation === null) {
            $this->throwNullValueException(static::PYZ_ANTELOPE_LOCATION);
        }

        return $this->pyzAntelopeLocation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePyzAntelopeLocation()
    {
        $this->assertPropertyIsSet(self::PYZ_ANTELOPE_LOCATION);

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
                case 'idAntelope':
                case 'name':
                case 'fkLocation':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'pyzAntelopeLocation':
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
                case 'idAntelope':
                case 'name':
                case 'fkLocation':
                    $values[$arrayKey] = $value;

                    break;
                case 'pyzAntelopeLocation':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

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
                case 'idAntelope':
                case 'name':
                case 'fkLocation':
                    $values[$arrayKey] = $value;

                    break;
                case 'pyzAntelopeLocation':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

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
            'idAntelope' => $this->idAntelope,
            'name' => $this->name,
            'fkLocation' => $this->fkLocation,
            'pyzAntelopeLocation' => $this->pyzAntelopeLocation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_antelope' => $this->idAntelope,
            'name' => $this->name,
            'fk_location' => $this->fkLocation,
            'pyz_antelope_location' => $this->pyzAntelopeLocation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_antelope' => $this->idAntelope instanceof AbstractTransfer ? $this->idAntelope->toArray(true, false) : $this->idAntelope,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'fk_location' => $this->fkLocation instanceof AbstractTransfer ? $this->fkLocation->toArray(true, false) : $this->fkLocation,
            'pyz_antelope_location' => $this->pyzAntelopeLocation instanceof AbstractTransfer ? $this->pyzAntelopeLocation->toArray(true, false) : $this->pyzAntelopeLocation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idAntelope' => $this->idAntelope instanceof AbstractTransfer ? $this->idAntelope->toArray(true, true) : $this->idAntelope,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'fkLocation' => $this->fkLocation instanceof AbstractTransfer ? $this->fkLocation->toArray(true, true) : $this->fkLocation,
            'pyzAntelopeLocation' => $this->pyzAntelopeLocation instanceof AbstractTransfer ? $this->pyzAntelopeLocation->toArray(true, true) : $this->pyzAntelopeLocation,
        ];
    }
}
