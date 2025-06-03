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
class SpyGiftCardProductAbstractConfigurationLinkEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION_LINK = 'idGiftCardProductAbstractConfigurationLink';

    /**
     * @var string
     */
    public const FK_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION = 'fkGiftCardProductAbstractConfiguration';

    /**
     * @var string
     */
    public const FK_PRODUCT_ABSTRACT = 'fkProductAbstract';

    /**
     * @var string
     */
    public const SPY_PRODUCT_ABSTRACT = 'spyProductAbstract';

    /**
     * @var string
     */
    public const SPY_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION = 'spyGiftCardProductAbstractConfiguration';

    /**
     * @var integer|null
     */
    protected $idGiftCardProductAbstractConfigurationLink;

    /**
     * @var integer|null
     */
    protected $fkGiftCardProductAbstractConfiguration;

    /**
     * @var integer|null
     */
    protected $fkProductAbstract;

    /**
     * @var \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    protected $spyProductAbstract;

    /**
     * @var \Generated\Shared\Transfer\SpyGiftCardProductAbstractConfigurationEntityTransfer|null
     */
    protected $spyGiftCardProductAbstractConfiguration;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_gift_card_product_abstract_configuration_link' => 'idGiftCardProductAbstractConfigurationLink',
        'idGiftCardProductAbstractConfigurationLink' => 'idGiftCardProductAbstractConfigurationLink',
        'IdGiftCardProductAbstractConfigurationLink' => 'idGiftCardProductAbstractConfigurationLink',
        'fk_gift_card_product_abstract_configuration' => 'fkGiftCardProductAbstractConfiguration',
        'fkGiftCardProductAbstractConfiguration' => 'fkGiftCardProductAbstractConfiguration',
        'FkGiftCardProductAbstractConfiguration' => 'fkGiftCardProductAbstractConfiguration',
        'fk_product_abstract' => 'fkProductAbstract',
        'fkProductAbstract' => 'fkProductAbstract',
        'FkProductAbstract' => 'fkProductAbstract',
        'spy_product_abstract' => 'spyProductAbstract',
        'spyProductAbstract' => 'spyProductAbstract',
        'SpyProductAbstract' => 'spyProductAbstract',
        'spy_gift_card_product_abstract_configuration' => 'spyGiftCardProductAbstractConfiguration',
        'spyGiftCardProductAbstractConfiguration' => 'spyGiftCardProductAbstractConfiguration',
        'SpyGiftCardProductAbstractConfiguration' => 'spyGiftCardProductAbstractConfiguration',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION_LINK => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_gift_card_product_abstract_configuration_link',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_gift_card_product_abstract_configuration',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PRODUCT_ABSTRACT => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_product_abstract',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_PRODUCT_ABSTRACT => [
            'type' => 'Generated\Shared\Transfer\SpyProductAbstractEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_product_abstract',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION => [
            'type' => 'Generated\Shared\Transfer\SpyGiftCardProductAbstractConfigurationEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_gift_card_product_abstract_configuration',
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
    public static $entityNamespace = 'Orm\Zed\GiftCard\Persistence\SpyGiftCardProductAbstractConfigurationLink';


    /**
     * @module 
     *
     * @param integer|null $idGiftCardProductAbstractConfigurationLink
     *
     * @return $this
     */
    public function setIdGiftCardProductAbstractConfigurationLink($idGiftCardProductAbstractConfigurationLink)
    {
        $this->idGiftCardProductAbstractConfigurationLink = $idGiftCardProductAbstractConfigurationLink;
        $this->modifiedProperties[self::ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION_LINK] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdGiftCardProductAbstractConfigurationLink()
    {
        return $this->idGiftCardProductAbstractConfigurationLink;
    }

    /**
     * @module 
     *
     * @param integer|null $idGiftCardProductAbstractConfigurationLink
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdGiftCardProductAbstractConfigurationLinkOrFail($idGiftCardProductAbstractConfigurationLink)
    {
        if ($idGiftCardProductAbstractConfigurationLink === null) {
            $this->throwNullValueException(static::ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION_LINK);
        }

        return $this->setIdGiftCardProductAbstractConfigurationLink($idGiftCardProductAbstractConfigurationLink);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdGiftCardProductAbstractConfigurationLinkOrFail()
    {
        if ($this->idGiftCardProductAbstractConfigurationLink === null) {
            $this->throwNullValueException(static::ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION_LINK);
        }

        return $this->idGiftCardProductAbstractConfigurationLink;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdGiftCardProductAbstractConfigurationLink()
    {
        $this->assertPropertyIsSet(self::ID_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION_LINK);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkGiftCardProductAbstractConfiguration
     *
     * @return $this
     */
    public function setFkGiftCardProductAbstractConfiguration($fkGiftCardProductAbstractConfiguration)
    {
        $this->fkGiftCardProductAbstractConfiguration = $fkGiftCardProductAbstractConfiguration;
        $this->modifiedProperties[self::FK_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkGiftCardProductAbstractConfiguration()
    {
        return $this->fkGiftCardProductAbstractConfiguration;
    }

    /**
     * @module 
     *
     * @param integer|null $fkGiftCardProductAbstractConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkGiftCardProductAbstractConfigurationOrFail($fkGiftCardProductAbstractConfiguration)
    {
        if ($fkGiftCardProductAbstractConfiguration === null) {
            $this->throwNullValueException(static::FK_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION);
        }

        return $this->setFkGiftCardProductAbstractConfiguration($fkGiftCardProductAbstractConfiguration);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkGiftCardProductAbstractConfigurationOrFail()
    {
        if ($this->fkGiftCardProductAbstractConfiguration === null) {
            $this->throwNullValueException(static::FK_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION);
        }

        return $this->fkGiftCardProductAbstractConfiguration;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkGiftCardProductAbstractConfiguration()
    {
        $this->assertPropertyIsSet(self::FK_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductAbstract
     *
     * @return $this
     */
    public function setFkProductAbstract($fkProductAbstract)
    {
        $this->fkProductAbstract = $fkProductAbstract;
        $this->modifiedProperties[self::FK_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkProductAbstract()
    {
        return $this->fkProductAbstract;
    }

    /**
     * @module 
     *
     * @param integer|null $fkProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkProductAbstractOrFail($fkProductAbstract)
    {
        if ($fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->setFkProductAbstract($fkProductAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkProductAbstractOrFail()
    {
        if ($this->fkProductAbstract === null) {
            $this->throwNullValueException(static::FK_PRODUCT_ABSTRACT);
        }

        return $this->fkProductAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkProductAbstract()
    {
        $this->assertPropertyIsSet(self::FK_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null $spyProductAbstract
     *
     * @return $this
     */
    public function setSpyProductAbstract(SpyProductAbstractEntityTransfer $spyProductAbstract = null)
    {
        $this->spyProductAbstract = $spyProductAbstract;
        $this->modifiedProperties[self::SPY_PRODUCT_ABSTRACT] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer|null
     */
    public function getSpyProductAbstract()
    {
        return $this->spyProductAbstract;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer $spyProductAbstract
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyProductAbstractOrFail(SpyProductAbstractEntityTransfer $spyProductAbstract)
    {
        return $this->setSpyProductAbstract($spyProductAbstract);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyProductAbstractEntityTransfer
     */
    public function getSpyProductAbstractOrFail()
    {
        if ($this->spyProductAbstract === null) {
            $this->throwNullValueException(static::SPY_PRODUCT_ABSTRACT);
        }

        return $this->spyProductAbstract;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyProductAbstract()
    {
        $this->assertPropertyIsSet(self::SPY_PRODUCT_ABSTRACT);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyGiftCardProductAbstractConfigurationEntityTransfer|null $spyGiftCardProductAbstractConfiguration
     *
     * @return $this
     */
    public function setSpyGiftCardProductAbstractConfiguration(SpyGiftCardProductAbstractConfigurationEntityTransfer $spyGiftCardProductAbstractConfiguration = null)
    {
        $this->spyGiftCardProductAbstractConfiguration = $spyGiftCardProductAbstractConfiguration;
        $this->modifiedProperties[self::SPY_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyGiftCardProductAbstractConfigurationEntityTransfer|null
     */
    public function getSpyGiftCardProductAbstractConfiguration()
    {
        return $this->spyGiftCardProductAbstractConfiguration;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyGiftCardProductAbstractConfigurationEntityTransfer $spyGiftCardProductAbstractConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSpyGiftCardProductAbstractConfigurationOrFail(SpyGiftCardProductAbstractConfigurationEntityTransfer $spyGiftCardProductAbstractConfiguration)
    {
        return $this->setSpyGiftCardProductAbstractConfiguration($spyGiftCardProductAbstractConfiguration);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyGiftCardProductAbstractConfigurationEntityTransfer
     */
    public function getSpyGiftCardProductAbstractConfigurationOrFail()
    {
        if ($this->spyGiftCardProductAbstractConfiguration === null) {
            $this->throwNullValueException(static::SPY_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION);
        }

        return $this->spyGiftCardProductAbstractConfiguration;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyGiftCardProductAbstractConfiguration()
    {
        $this->assertPropertyIsSet(self::SPY_GIFT_CARD_PRODUCT_ABSTRACT_CONFIGURATION);

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
                case 'idGiftCardProductAbstractConfigurationLink':
                case 'fkGiftCardProductAbstractConfiguration':
                case 'fkProductAbstract':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyProductAbstract':
                case 'spyGiftCardProductAbstractConfiguration':
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
                case 'idGiftCardProductAbstractConfigurationLink':
                case 'fkGiftCardProductAbstractConfiguration':
                case 'fkProductAbstract':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductAbstract':
                case 'spyGiftCardProductAbstractConfiguration':
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
                case 'idGiftCardProductAbstractConfigurationLink':
                case 'fkGiftCardProductAbstractConfiguration':
                case 'fkProductAbstract':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyProductAbstract':
                case 'spyGiftCardProductAbstractConfiguration':
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
            'idGiftCardProductAbstractConfigurationLink' => $this->idGiftCardProductAbstractConfigurationLink,
            'fkGiftCardProductAbstractConfiguration' => $this->fkGiftCardProductAbstractConfiguration,
            'fkProductAbstract' => $this->fkProductAbstract,
            'spyProductAbstract' => $this->spyProductAbstract,
            'spyGiftCardProductAbstractConfiguration' => $this->spyGiftCardProductAbstractConfiguration,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_gift_card_product_abstract_configuration_link' => $this->idGiftCardProductAbstractConfigurationLink,
            'fk_gift_card_product_abstract_configuration' => $this->fkGiftCardProductAbstractConfiguration,
            'fk_product_abstract' => $this->fkProductAbstract,
            'spy_product_abstract' => $this->spyProductAbstract,
            'spy_gift_card_product_abstract_configuration' => $this->spyGiftCardProductAbstractConfiguration,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_gift_card_product_abstract_configuration_link' => $this->idGiftCardProductAbstractConfigurationLink instanceof AbstractTransfer ? $this->idGiftCardProductAbstractConfigurationLink->toArray(true, false) : $this->idGiftCardProductAbstractConfigurationLink,
            'fk_gift_card_product_abstract_configuration' => $this->fkGiftCardProductAbstractConfiguration instanceof AbstractTransfer ? $this->fkGiftCardProductAbstractConfiguration->toArray(true, false) : $this->fkGiftCardProductAbstractConfiguration,
            'fk_product_abstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, false) : $this->fkProductAbstract,
            'spy_product_abstract' => $this->spyProductAbstract instanceof AbstractTransfer ? $this->spyProductAbstract->toArray(true, false) : $this->spyProductAbstract,
            'spy_gift_card_product_abstract_configuration' => $this->spyGiftCardProductAbstractConfiguration instanceof AbstractTransfer ? $this->spyGiftCardProductAbstractConfiguration->toArray(true, false) : $this->spyGiftCardProductAbstractConfiguration,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idGiftCardProductAbstractConfigurationLink' => $this->idGiftCardProductAbstractConfigurationLink instanceof AbstractTransfer ? $this->idGiftCardProductAbstractConfigurationLink->toArray(true, true) : $this->idGiftCardProductAbstractConfigurationLink,
            'fkGiftCardProductAbstractConfiguration' => $this->fkGiftCardProductAbstractConfiguration instanceof AbstractTransfer ? $this->fkGiftCardProductAbstractConfiguration->toArray(true, true) : $this->fkGiftCardProductAbstractConfiguration,
            'fkProductAbstract' => $this->fkProductAbstract instanceof AbstractTransfer ? $this->fkProductAbstract->toArray(true, true) : $this->fkProductAbstract,
            'spyProductAbstract' => $this->spyProductAbstract instanceof AbstractTransfer ? $this->spyProductAbstract->toArray(true, true) : $this->spyProductAbstract,
            'spyGiftCardProductAbstractConfiguration' => $this->spyGiftCardProductAbstractConfiguration instanceof AbstractTransfer ? $this->spyGiftCardProductAbstractConfiguration->toArray(true, true) : $this->spyGiftCardProductAbstractConfiguration,
        ];
    }
}
