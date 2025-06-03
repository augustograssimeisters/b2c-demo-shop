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
class TaxCalculationResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SALE = 'sale';

    /**
     * @var string
     */
    public const IS_SUCCESSFUL = 'isSuccessful';

    /**
     * @var string
     */
    public const API_ERROR_MESSAGES = 'apiErrorMessages';

    /**
     * @var \Generated\Shared\Transfer\TaxAppSaleTransfer|null
     */
    protected $sale;

    /**
     * @var bool|null
     */
    protected $isSuccessful;

    /**
     * @var \ArrayObject<\Generated\Shared\Transfer\ApiErrorMessageTransfer>
     */
    protected $apiErrorMessages;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'sale' => 'sale',
        'Sale' => 'sale',
        'is_successful' => 'isSuccessful',
        'isSuccessful' => 'isSuccessful',
        'IsSuccessful' => 'isSuccessful',
        'api_error_messages' => 'apiErrorMessages',
        'apiErrorMessages' => 'apiErrorMessages',
        'ApiErrorMessages' => 'apiErrorMessages',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SALE => [
            'type' => 'Generated\Shared\Transfer\TaxAppSaleTransfer',
            'type_shim' => null,
            'name_underscore' => 'sale',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::IS_SUCCESSFUL => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_successful',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => true,
        ],
        self::API_ERROR_MESSAGES => [
            'type' => 'Generated\Shared\Transfer\ApiErrorMessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'api_error_messages',
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
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\TaxAppSaleTransfer|null $sale
     *
     * @return $this
     */
    public function setSale(?TaxAppSaleTransfer $sale = null)
    {
        $this->sale = $sale;
        $this->modifiedProperties[self::SALE] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return \Generated\Shared\Transfer\TaxAppSaleTransfer|null
     */
    public function getSale(): ?TaxAppSaleTransfer
    {
        return $this->sale;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\TaxAppSaleTransfer $sale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSaleOrFail(TaxAppSaleTransfer $sale)
    {
        return $this->setSale($sale);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\TaxAppSaleTransfer
     */
    public function getSaleOrFail(): TaxAppSaleTransfer
    {
        if ($this->sale === null) {
            $this->throwNullValueException(static::SALE);
        }

        return $this->sale;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSale()
    {
        $this->assertPropertyIsSet(self::SALE);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param bool|null $isSuccessful
     *
     * @return $this
     */
    public function setIsSuccessful(?bool $isSuccessful = null)
    {
        $this->isSuccessful = $isSuccessful;
        $this->modifiedProperties[self::IS_SUCCESSFUL] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return bool|null
     */
    public function getIsSuccessful(): ?bool
    {
        return $this->isSuccessful;
    }

    /**
     * @module TaxApp
     *
     * @param bool $isSuccessful
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSuccessfulOrFail(bool $isSuccessful)
    {
        return $this->setIsSuccessful($isSuccessful);
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSuccessfulOrFail(): bool
    {
        if ($this->isSuccessful === null) {
            $this->throwNullValueException(static::IS_SUCCESSFUL);
        }

        return $this->isSuccessful;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSuccessful()
    {
        $this->assertPropertyIsSet(self::IS_SUCCESSFUL);

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @param \ArrayObject<\Generated\Shared\Transfer\ApiErrorMessageTransfer> $apiErrorMessages
     *
     * @return $this
     */
    public function setApiErrorMessages(ArrayObject $apiErrorMessages)
    {
        $this->apiErrorMessages = new ArrayObject();

        foreach ($apiErrorMessages as $key => $value) {
            $args = [$value];

            if ($this->transferMetadata[static::API_ERROR_MESSAGES]['is_associative']) {
                $args = [$key, $value];
            }

            $this->addApiErrorMessage(...$args);
        }

        $this->modifiedProperties[self::API_ERROR_MESSAGES] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @return \ArrayObject<\Generated\Shared\Transfer\ApiErrorMessageTransfer>
     */
    public function getApiErrorMessages(): ArrayObject
    {
        return $this->apiErrorMessages;
    }

    /**
     * @module TaxApp
     *
     * @param \Generated\Shared\Transfer\ApiErrorMessageTransfer $apiErrorMessage
     *
     * @return $this
     */
    public function addApiErrorMessage(ApiErrorMessageTransfer $apiErrorMessage)
    {
        $this->apiErrorMessages[] = $apiErrorMessage;
        $this->modifiedProperties[self::API_ERROR_MESSAGES] = true;

        return $this;
    }

    /**
     * @module TaxApp
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireApiErrorMessages()
    {
        $this->assertCollectionPropertyIsSet(self::API_ERROR_MESSAGES);

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
                case 'isSuccessful':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'sale':
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
                case 'apiErrorMessages':
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
                case 'isSuccessful':
                    $values[$arrayKey] = $value;

                    break;
                case 'sale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'apiErrorMessages':
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
                case 'isSuccessful':
                    $values[$arrayKey] = $value;

                    break;
                case 'sale':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'apiErrorMessages':
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
        $this->apiErrorMessages = $this->apiErrorMessages ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isSuccessful' => $this->isSuccessful,
            'sale' => $this->sale,
            'apiErrorMessages' => $this->apiErrorMessages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_successful' => $this->isSuccessful,
            'sale' => $this->sale,
            'api_error_messages' => $this->apiErrorMessages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_successful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, false) : $this->isSuccessful,
            'sale' => $this->sale instanceof AbstractTransfer ? $this->sale->toArray(true, false) : $this->sale,
            'api_error_messages' => $this->apiErrorMessages instanceof AbstractTransfer ? $this->apiErrorMessages->toArray(true, false) : $this->addValuesToCollection($this->apiErrorMessages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isSuccessful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, true) : $this->isSuccessful,
            'sale' => $this->sale instanceof AbstractTransfer ? $this->sale->toArray(true, true) : $this->sale,
            'apiErrorMessages' => $this->apiErrorMessages instanceof AbstractTransfer ? $this->apiErrorMessages->toArray(true, true) : $this->addValuesToCollection($this->apiErrorMessages, true, true),
        ];
    }
}
