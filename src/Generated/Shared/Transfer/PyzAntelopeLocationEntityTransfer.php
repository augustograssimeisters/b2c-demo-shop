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
class PyzAntelopeLocationEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_LOCATION = 'idLocation';

    /**
     * @var string
     */
    public const LOCATION_NAME = 'locationName';

    /**
     * @var string
     */
    public const PYZ_ANTELOPES = 'pyzAntelopes';

    /**
     * @var integer|null
     */
    protected $idLocation;

    /**
     * @var string|null
     */
    protected $locationName;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\PyzAntelopeEntityTransfer>
     */
    protected $pyzAntelopes;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_location' => 'idLocation',
        'idLocation' => 'idLocation',
        'IdLocation' => 'idLocation',
        'location_name' => 'locationName',
        'locationName' => 'locationName',
        'LocationName' => 'locationName',
        'pyz_antelopes' => 'pyzAntelopes',
        'pyzAntelopes' => 'pyzAntelopes',
        'PyzAntelopes' => 'pyzAntelopes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_LOCATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_location',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCATION_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'location_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PYZ_ANTELOPES => [
            'type' => 'Generated\Shared\Transfer\PyzAntelopeEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'pyz_antelopes',
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
    public static $entityNamespace = 'Orm\Zed\Antelope\Persistence\PyzAntelopeLocation';


    /**
     * @module 
     *
     * @param integer|null $idLocation
     *
     * @return $this
     */
    public function setIdLocation($idLocation)
    {
        $this->idLocation = $idLocation;
        $this->modifiedProperties[self::ID_LOCATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdLocation()
    {
        return $this->idLocation;
    }

    /**
     * @module 
     *
     * @param integer|null $idLocation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdLocationOrFail($idLocation)
    {
        if ($idLocation === null) {
            $this->throwNullValueException(static::ID_LOCATION);
        }

        return $this->setIdLocation($idLocation);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdLocationOrFail()
    {
        if ($this->idLocation === null) {
            $this->throwNullValueException(static::ID_LOCATION);
        }

        return $this->idLocation;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdLocation()
    {
        $this->assertPropertyIsSet(self::ID_LOCATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $locationName
     *
     * @return $this
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;
        $this->modifiedProperties[self::LOCATION_NAME] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * @module 
     *
     * @param string|null $locationName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocationNameOrFail($locationName)
    {
        if ($locationName === null) {
            $this->throwNullValueException(static::LOCATION_NAME);
        }

        return $this->setLocationName($locationName);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocationNameOrFail()
    {
        if ($this->locationName === null) {
            $this->throwNullValueException(static::LOCATION_NAME);
        }

        return $this->locationName;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocationName()
    {
        $this->assertPropertyIsSet(self::LOCATION_NAME);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\PyzAntelopeEntityTransfer> $pyzAntelopes
     *
     * @return $this
     */
    public function setPyzAntelopes(ArrayObject $pyzAntelopes)
    {
        $this->pyzAntelopes = $pyzAntelopes;
        $this->modifiedProperties[self::PYZ_ANTELOPES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\PyzAntelopeEntityTransfer>
     */
    public function getPyzAntelopes()
    {
        return $this->pyzAntelopes;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\PyzAntelopeEntityTransfer $pyzAntelopes
     *
     * @return $this
     */
    public function addPyzAntelopes(PyzAntelopeEntityTransfer $pyzAntelopes)
    {
        $this->pyzAntelopes[] = $pyzAntelopes;
        $this->modifiedProperties[self::PYZ_ANTELOPES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePyzAntelopes()
    {
        $this->assertCollectionPropertyIsSet(self::PYZ_ANTELOPES);

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
                case 'idLocation':
                case 'locationName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'pyzAntelopes':
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
                case 'idLocation':
                case 'locationName':
                    $values[$arrayKey] = $value;

                    break;
                case 'pyzAntelopes':
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
                case 'idLocation':
                case 'locationName':
                    $values[$arrayKey] = $value;

                    break;
                case 'pyzAntelopes':
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
        $this->pyzAntelopes = $this->pyzAntelopes ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idLocation' => $this->idLocation,
            'locationName' => $this->locationName,
            'pyzAntelopes' => $this->pyzAntelopes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_location' => $this->idLocation,
            'location_name' => $this->locationName,
            'pyz_antelopes' => $this->pyzAntelopes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_location' => $this->idLocation instanceof AbstractTransfer ? $this->idLocation->toArray(true, false) : $this->idLocation,
            'location_name' => $this->locationName instanceof AbstractTransfer ? $this->locationName->toArray(true, false) : $this->locationName,
            'pyz_antelopes' => $this->pyzAntelopes instanceof AbstractTransfer ? $this->pyzAntelopes->toArray(true, false) : $this->addValuesToCollection($this->pyzAntelopes, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idLocation' => $this->idLocation instanceof AbstractTransfer ? $this->idLocation->toArray(true, true) : $this->idLocation,
            'locationName' => $this->locationName instanceof AbstractTransfer ? $this->locationName->toArray(true, true) : $this->locationName,
            'pyzAntelopes' => $this->pyzAntelopes instanceof AbstractTransfer ? $this->pyzAntelopes->toArray(true, true) : $this->addValuesToCollection($this->pyzAntelopes, true, true),
        ];
    }
}
