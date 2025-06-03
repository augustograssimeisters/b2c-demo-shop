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
class WishlistResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_SUCCESS = 'isSuccess';

    /**
     * @var string
     */
    public const ERRORS = 'errors';

    /**
     * @var string
     */
    public const WISHLIST = 'wishlist';

    /**
     * @var string
     */
    public const ERROR_IDENTIFIER = 'errorIdentifier';

    /**
     * @var bool|null
     */
    protected $isSuccess;

    /**
     * @var array
     */
    protected $errors = [];

    /**
     * @var \Generated\Shared\Transfer\WishlistTransfer|null
     */
    protected $wishlist;

    /**
     * @var string|null
     */
    protected $errorIdentifier;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_success' => 'isSuccess',
        'isSuccess' => 'isSuccess',
        'IsSuccess' => 'isSuccess',
        'errors' => 'errors',
        'Errors' => 'errors',
        'wishlist' => 'wishlist',
        'Wishlist' => 'wishlist',
        'error_identifier' => 'errorIdentifier',
        'errorIdentifier' => 'errorIdentifier',
        'ErrorIdentifier' => 'errorIdentifier',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IS_SUCCESS => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_success',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ERRORS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'errors',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::WISHLIST => [
            'type' => 'Generated\Shared\Transfer\WishlistTransfer',
            'type_shim' => null,
            'name_underscore' => 'wishlist',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ERROR_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'error_identifier',
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
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @param bool|null $isSuccess
     *
     * @return $this
     */
    public function setIsSuccess($isSuccess)
    {
        $this->isSuccess = $isSuccess;
        $this->modifiedProperties[self::IS_SUCCESS] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @return bool|null
     */
    public function getIsSuccess()
    {
        return $this->isSuccess;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @param bool|null $isSuccess
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSuccessOrFail($isSuccess)
    {
        if ($isSuccess === null) {
            $this->throwNullValueException(static::IS_SUCCESS);
        }

        return $this->setIsSuccess($isSuccess);
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSuccessOrFail()
    {
        if ($this->isSuccess === null) {
            $this->throwNullValueException(static::IS_SUCCESS);
        }

        return $this->isSuccess;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSuccess()
    {
        $this->assertPropertyIsSet(self::IS_SUCCESS);

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @param array|null $errors
     *
     * @return $this
     */
    public function setErrors(array $errors = null)
    {
        if ($errors === null) {
            $errors = [];
        }

        $this->errors = $errors;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @param mixed $error
     *
     * @return $this
     */
    public function addError($error)
    {
        $this->errors[] = $error;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrors()
    {
        $this->assertPropertyIsSet(self::ERRORS);

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @param \Generated\Shared\Transfer\WishlistTransfer|null $wishlist
     *
     * @return $this
     */
    public function setWishlist(WishlistTransfer $wishlist = null)
    {
        $this->wishlist = $wishlist;
        $this->modifiedProperties[self::WISHLIST] = true;

        return $this;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @return \Generated\Shared\Transfer\WishlistTransfer|null
     */
    public function getWishlist()
    {
        return $this->wishlist;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @param \Generated\Shared\Transfer\WishlistTransfer $wishlist
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setWishlistOrFail(WishlistTransfer $wishlist)
    {
        return $this->setWishlist($wishlist);
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\WishlistTransfer
     */
    public function getWishlistOrFail()
    {
        if ($this->wishlist === null) {
            $this->throwNullValueException(static::WISHLIST);
        }

        return $this->wishlist;
    }

    /**
     * @module WishlistPage|Wishlist|WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireWishlist()
    {
        $this->assertPropertyIsSet(self::WISHLIST);

        return $this;
    }

    /**
     * @module WishlistsRestApi
     *
     * @param string|null $errorIdentifier
     *
     * @return $this
     */
    public function setErrorIdentifier($errorIdentifier)
    {
        $this->errorIdentifier = $errorIdentifier;
        $this->modifiedProperties[self::ERROR_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module WishlistsRestApi
     *
     * @return string|null
     */
    public function getErrorIdentifier()
    {
        return $this->errorIdentifier;
    }

    /**
     * @module WishlistsRestApi
     *
     * @param string|null $errorIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setErrorIdentifierOrFail($errorIdentifier)
    {
        if ($errorIdentifier === null) {
            $this->throwNullValueException(static::ERROR_IDENTIFIER);
        }

        return $this->setErrorIdentifier($errorIdentifier);
    }

    /**
     * @module WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getErrorIdentifierOrFail()
    {
        if ($this->errorIdentifier === null) {
            $this->throwNullValueException(static::ERROR_IDENTIFIER);
        }

        return $this->errorIdentifier;
    }

    /**
     * @module WishlistsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrorIdentifier()
    {
        $this->assertPropertyIsSet(self::ERROR_IDENTIFIER);

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
                case 'isSuccess':
                case 'errors':
                case 'errorIdentifier':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'wishlist':
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
                case 'isSuccess':
                case 'errors':
                case 'errorIdentifier':
                    $values[$arrayKey] = $value;

                    break;
                case 'wishlist':
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
                case 'isSuccess':
                case 'errors':
                case 'errorIdentifier':
                    $values[$arrayKey] = $value;

                    break;
                case 'wishlist':
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
            'isSuccess' => $this->isSuccess,
            'errors' => $this->errors,
            'errorIdentifier' => $this->errorIdentifier,
            'wishlist' => $this->wishlist,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_success' => $this->isSuccess,
            'errors' => $this->errors,
            'error_identifier' => $this->errorIdentifier,
            'wishlist' => $this->wishlist,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_success' => $this->isSuccess instanceof AbstractTransfer ? $this->isSuccess->toArray(true, false) : $this->isSuccess,
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, false) : $this->errors,
            'error_identifier' => $this->errorIdentifier instanceof AbstractTransfer ? $this->errorIdentifier->toArray(true, false) : $this->errorIdentifier,
            'wishlist' => $this->wishlist instanceof AbstractTransfer ? $this->wishlist->toArray(true, false) : $this->wishlist,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isSuccess' => $this->isSuccess instanceof AbstractTransfer ? $this->isSuccess->toArray(true, true) : $this->isSuccess,
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, true) : $this->errors,
            'errorIdentifier' => $this->errorIdentifier instanceof AbstractTransfer ? $this->errorIdentifier->toArray(true, true) : $this->errorIdentifier,
            'wishlist' => $this->wishlist instanceof AbstractTransfer ? $this->wishlist->toArray(true, true) : $this->wishlist,
        ];
    }
}
