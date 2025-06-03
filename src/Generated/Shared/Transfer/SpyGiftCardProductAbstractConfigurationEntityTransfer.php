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
class SpyGiftCardProductAbstractConfigurationEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION = 'idGiftCardProductAbstractConfiguration';

    /**
     * @var string
     */
    public const CODE_PATTERN = 'codePattern';

    /**
     * @var string
     */
    public const SPY_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION_LINKS = 'spyGiftCardProductAbstractConfigurationLinks';

    /**
     * @var integer|null
     */
    protected $idGiftCardProductAbstractConfiguration;

    /**
     * @var string|null
     */
    protected $codePattern;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\SpyGiftCardProductAbstractConfigurationLinkEntityTransfer>
     */
    protected $spyGiftCardProductAbstractConfigurationLinks;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_gift_card_product_abstract_configuration' => 'idGiftCardProductAbstractConfiguration',
        'idGiftCardProductAbstractConfiguration' => 'idGiftCardProductAbstractConfiguration',
        'IdGiftCardProductAbstractConfiguration' => 'idGiftCardProductAbstractConfiguration',
        'code_pattern' => 'codePattern',
        'codePattern' => 'codePattern',
        'CodePattern' => 'codePattern',
        'spy_gift_card_product_abstract_configuration_links' => 'spyGiftCardProductAbstractConfigurationLinks',
        'spyGiftCardProductAbstractConfigurationLinks' => 'spyGiftCardProductAbstractConfigurationLinks',
        'SpyGiftCardProductAbstractConfigurationLinks' => 'spyGiftCardProductAbstractConfigurationLinks',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_gift_card_product_abstract_configuration',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CODE_PATTERN => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'code_pattern',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION_LINKS => [
            'type' => 'Generated\Shared\Transfer\SpyGiftCardProductAbstractConfigurationLinkEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_gift_card_product_abstract_configuration_links',
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
    public static $entityNamespace = 'Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfiguration';


    /**
     * @module 
     *
     * @param integer|null $idGiftCardProductAbstractConfiguration
     *
     * @return $this
     */
    public function setIdGiftCardProductAbstractConfiguration($idGiftCardProductAbstractConfiguration)
    {
        $this->idGiftCardProductAbstractConfiguration = $idGiftCardProductAbstractConfiguration;
        $this->modifiedProperties[self::ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdGiftCardProductAbstractConfiguration()
    {
        return $this->idGiftCardProductAbstractConfiguration;
    }

    /**
     * @module 
     *
     * @param integer|null $idGiftCardProductAbstractConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdGiftCardProductAbstractConfigurationOrFail($idGiftCardProductAbstractConfiguration)
    {
        if ($idGiftCardProductAbstractConfiguration === null) {
            $this->throwNullValueException(static::ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION);
        }

        return $this->setIdGiftCardProductAbstractConfiguration($idGiftCardProductAbstractConfiguration);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdGiftCardProductAbstractConfigurationOrFail()
    {
        if ($this->idGiftCardProductAbstractConfiguration === null) {
            $this->throwNullValueException(static::ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION);
        }

        return $this->idGiftCardProductAbstractConfiguration;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdGiftCardProductAbstractConfiguration()
    {
        $this->assertPropertyIsSet(self::ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $codePattern
     *
     * @return $this
     */
    public function setCodePattern($codePattern)
    {
        $this->codePattern = $codePattern;
        $this->modifiedProperties[self::CODE_PATTERN] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getCodePattern()
    {
        return $this->codePattern;
    }

    /**
     * @module 
     *
     * @param string|null $codePattern
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCodePatternOrFail($codePattern)
    {
        if ($codePattern === null) {
            $this->throwNullValueException(static::CODE_PATTERN);
        }

        return $this->setCodePattern($codePattern);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCodePatternOrFail()
    {
        if ($this->codePattern === null) {
            $this->throwNullValueException(static::CODE_PATTERN);
        }

        return $this->codePattern;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCodePattern()
    {
        $this->assertPropertyIsSet(self::CODE_PATTERN);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\SpyGiftCardProductAbstractConfigurationLinkEntityTransfer> $spyGiftCardProductAbstractConfigurationLinks
     *
     * @return $this
     */
    public function setSpyGiftCardProductAbstractConfigurationLinks(ArrayObject $spyGiftCardProductAbstractConfigurationLinks)
    {
        $this->spyGiftCardProductAbstractConfigurationLinks = $spyGiftCardProductAbstractConfigurationLinks;
        $this->modifiedProperties[self::SPY_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION_LINKS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\SpyGiftCardProductAbstractConfigurationLinkEntityTransfer>
     */
    public function getSpyGiftCardProductAbstractConfigurationLinks()
    {
        return $this->spyGiftCardProductAbstractConfigurationLinks;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyGiftCardProductAbstractConfigurationLinkEntityTransfer $spyGiftCardProductAbstractConfigurationLinks
     *
     * @return $this
     */
    public function addSpyGiftCardProductAbstractConfigurationLinks(SpyGiftCardProductAbstractConfigurationLinkEntityTransfer $spyGiftCardProductAbstractConfigurationLinks)
    {
        $this->spyGiftCardProductAbstractConfigurationLinks[] = $spyGiftCardProductAbstractConfigurationLinks;
        $this->modifiedProperties[self::SPY_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION_LINKS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyGiftCardProductAbstractConfigurationLinks()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION_LINKS);

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
                case 'idGiftCardProductAbstractConfiguration':
                case 'codePattern':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyGiftCardProductAbstractConfigurationLinks':
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
                case 'idGiftCardProductAbstractConfiguration':
                case 'codePattern':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyGiftCardProductAbstractConfigurationLinks':
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
                case 'idGiftCardProductAbstractConfiguration':
                case 'codePattern':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyGiftCardProductAbstractConfigurationLinks':
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
        $this->spyGiftCardProductAbstractConfigurationLinks = $this->spyGiftCardProductAbstractConfigurationLinks ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idGiftCardProductAbstractConfiguration' => $this->idGiftCardProductAbstractConfiguration,
            'codePattern' => $this->codePattern,
            'spyGiftCardProductAbstractConfigurationLinks' => $this->spyGiftCardProductAbstractConfigurationLinks,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_gift_card_product_abstract_configuration' => $this->idGiftCardProductAbstractConfiguration,
            'code_pattern' => $this->codePattern,
            'spy_gift_card_product_abstract_configuration_links' => $this->spyGiftCardProductAbstractConfigurationLinks,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_gift_card_product_abstract_configuration' => $this->idGiftCardProductAbstractConfiguration instanceof AbstractTransfer ? $this->idGiftCardProductAbstractConfiguration->toArray(true, false) : $this->idGiftCardProductAbstractConfiguration,
            'code_pattern' => $this->codePattern instanceof AbstractTransfer ? $this->codePattern->toArray(true, false) : $this->codePattern,
            'spy_gift_card_product_abstract_configuration_links' => $this->spyGiftCardProductAbstractConfigurationLinks instanceof AbstractTransfer ? $this->spyGiftCardProductAbstractConfigurationLinks->toArray(true, false) : $this->addValuesToCollection($this->spyGiftCardProductAbstractConfigurationLinks, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idGiftCardProductAbstractConfiguration' => $this->idGiftCardProductAbstractConfiguration instanceof AbstractTransfer ? $this->idGiftCardProductAbstractConfiguration->toArray(true, true) : $this->idGiftCardProductAbstractConfiguration,
            'codePattern' => $this->codePattern instanceof AbstractTransfer ? $this->codePattern->toArray(true, true) : $this->codePattern,
            'spyGiftCardProductAbstractConfigurationLinks' => $this->spyGiftCardProductAbstractConfigurationLinks instanceof AbstractTransfer ? $this->spyGiftCardProductAbstractConfigurationLinks->toArray(true, true) : $this->addValuesToCollection($this->spyGiftCardProductAbstractConfigurationLinks, true, true),
        ];
    }
}
