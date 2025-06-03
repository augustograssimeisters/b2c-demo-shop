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
class SpyGiftCardProductConfigurationEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_GIFT_CARD_PRODUCT_CONFIGURATION = 'idGiftCardProductConfiguration';

    /**
     * @var string
     */
    public const VALUE = 'value';

    /**
     * @var string
     */
    public const SPY_GIFT_CARD_PRODUCT_CONFIGURATION_LINKS = 'spyGiftCardProductConfigurationLinks';

    /**
     * @var integer|null
     */
    protected $idGiftCardProductConfiguration;

    /**
     * @var integer|null
     */
    protected $value;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyGiftCardProductConfigurationLinkEntityTransfer>
     */
    protected $spyGiftCardProductConfigurationLinks;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_gift_card_product_configuration' => 'idGiftCardProductConfiguration',
        'idGiftCardProductConfiguration' => 'idGiftCardProductConfiguration',
        'IdGiftCardProductConfiguration' => 'idGiftCardProductConfiguration',
        'value' => 'value',
        'Value' => 'value',
        'spy_gift_card_product_configuration_links' => 'spyGiftCardProductConfigurationLinks',
        'spyGiftCardProductConfigurationLinks' => 'spyGiftCardProductConfigurationLinks',
        'SpyGiftCardProductConfigurationLinks' => 'spyGiftCardProductConfigurationLinks',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_GIFT_CARD_PRODUCT_CONFIGURATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_gift_card_product_configuration',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::VALUE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'value',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_GIFT_CARD_PRODUCT_CONFIGURATION_LINKS => [
            'type' => 'Generated\Shared\Transfer\SpyGiftCardProductConfigurationLinkEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_gift_card_product_configuration_links',
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
    public static $entityNamespace = 'Orm\Zed\GiftCard\Persistence\SpyGiftCardProductConfiguration';


    /**
     * @module 
     *
     * @param integer|null $idGiftCardProductConfiguration
     *
     * @return $this
     */
    public function setIdGiftCardProductConfiguration($idGiftCardProductConfiguration)
    {
        $this->idGiftCardProductConfiguration = $idGiftCardProductConfiguration;
        $this->modifiedProperties[self::ID_GIFT_CARD_PRODUCT_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdGiftCardProductConfiguration()
    {
        return $this->idGiftCardProductConfiguration;
    }

    /**
     * @module 
     *
     * @param integer|null $idGiftCardProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdGiftCardProductConfigurationOrFail($idGiftCardProductConfiguration)
    {
        if ($idGiftCardProductConfiguration === null) {
            $this->throwNullValueException(static::ID_GIFT_CARD_PRODUCT_CONFIGURATION);
        }

        return $this->setIdGiftCardProductConfiguration($idGiftCardProductConfiguration);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdGiftCardProductConfigurationOrFail()
    {
        if ($this->idGiftCardProductConfiguration === null) {
            $this->throwNullValueException(static::ID_GIFT_CARD_PRODUCT_CONFIGURATION);
        }

        return $this->idGiftCardProductConfiguration;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdGiftCardProductConfiguration()
    {
        $this->assertPropertyIsSet(self::ID_GIFT_CARD_PRODUCT_CONFIGURATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        $this->modifiedProperties[self::VALUE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @module 
     *
     * @param integer|null $value
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setValueOrFail($value)
    {
        if ($value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->setValue($value);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getValueOrFail()
    {
        if ($this->value === null) {
            $this->throwNullValueException(static::VALUE);
        }

        return $this->value;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireValue()
    {
        $this->assertPropertyIsSet(self::VALUE);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyGiftCardProductConfigurationLinkEntityTransfer> $spyGiftCardProductConfigurationLinks
     *
     * @return $this
     */
    public function setSpyGiftCardProductConfigurationLinks(ArrayObject $spyGiftCardProductConfigurationLinks)
    {
        $this->spyGiftCardProductConfigurationLinks = $spyGiftCardProductConfigurationLinks;
        $this->modifiedProperties[self::SPY_GIFT_CARD_PRODUCT_CONFIGURATION_LINKS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyGiftCardProductConfigurationLinkEntityTransfer>
     */
    public function getSpyGiftCardProductConfigurationLinks()
    {
        return $this->spyGiftCardProductConfigurationLinks;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyGiftCardProductConfigurationLinkEntityTransfer $spyGiftCardProductConfigurationLinks
     *
     * @return $this
     */
    public function addSpyGiftCardProductConfigurationLinks(SpyGiftCardProductConfigurationLinkEntityTransfer $spyGiftCardProductConfigurationLinks)
    {
        $this->spyGiftCardProductConfigurationLinks[] = $spyGiftCardProductConfigurationLinks;
        $this->modifiedProperties[self::SPY_GIFT_CARD_PRODUCT_CONFIGURATION_LINKS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyGiftCardProductConfigurationLinks()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_GIFT_CARD_PRODUCT_CONFIGURATION_LINKS);

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
                case 'idGiftCardProductConfiguration':
                case 'value':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyGiftCardProductConfigurationLinks':
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
                case 'idGiftCardProductConfiguration':
                case 'value':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyGiftCardProductConfigurationLinks':
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
                case 'idGiftCardProductConfiguration':
                case 'value':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyGiftCardProductConfigurationLinks':
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
        $this->spyGiftCardProductConfigurationLinks = $this->spyGiftCardProductConfigurationLinks ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idGiftCardProductConfiguration' => $this->idGiftCardProductConfiguration,
            'value' => $this->value,
            'spyGiftCardProductConfigurationLinks' => $this->spyGiftCardProductConfigurationLinks,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_gift_card_product_configuration' => $this->idGiftCardProductConfiguration,
            'value' => $this->value,
            'spy_gift_card_product_configuration_links' => $this->spyGiftCardProductConfigurationLinks,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_gift_card_product_configuration' => $this->idGiftCardProductConfiguration instanceof AbstractTransfer ? $this->idGiftCardProductConfiguration->toArray(true, false) : $this->idGiftCardProductConfiguration,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, false) : $this->value,
            'spy_gift_card_product_configuration_links' => $this->spyGiftCardProductConfigurationLinks instanceof AbstractTransfer ? $this->spyGiftCardProductConfigurationLinks->toArray(true, false) : $this->addValuesToCollection($this->spyGiftCardProductConfigurationLinks, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idGiftCardProductConfiguration' => $this->idGiftCardProductConfiguration instanceof AbstractTransfer ? $this->idGiftCardProductConfiguration->toArray(true, true) : $this->idGiftCardProductConfiguration,
            'value' => $this->value instanceof AbstractTransfer ? $this->value->toArray(true, true) : $this->value,
            'spyGiftCardProductConfigurationLinks' => $this->spyGiftCardProductConfigurationLinks instanceof AbstractTransfer ? $this->spyGiftCardProductConfigurationLinks->toArray(true, true) : $this->addValuesToCollection($this->spyGiftCardProductConfigurationLinks, true, true),
        ];
    }
}
