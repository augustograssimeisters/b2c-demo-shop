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
class ReviewTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_IDENTIFIER = 'productIdentifier';

    /**
     * @var string
     */
    public const CUSTOMER_IDENTIFIER = 'customerIdentifier';

    /**
     * @var string
     */
    public const NICKNAME = 'nickname';

    /**
     * @var string
     */
    public const LOCALE = 'locale';

    /**
     * @var string
     */
    public const REVIEW_TITLE = 'reviewTitle';

    /**
     * @var string
     */
    public const REVIEW_TEXT = 'reviewText';

    /**
     * @var string
     */
    public const RATING = 'rating';

    /**
     * @var string
     */
    public const STATUS = 'status';

    /**
     * @var string
     */
    public const CREATED_AT = 'createdAt';

    /**
     * @var string|null
     */
    protected $productIdentifier;

    /**
     * @var string|null
     */
    protected $customerIdentifier;

    /**
     * @var string|null
     */
    protected $nickname;

    /**
     * @var string|null
     */
    protected $locale;

    /**
     * @var string|null
     */
    protected $reviewTitle;

    /**
     * @var string|null
     */
    protected $reviewText;

    /**
     * @var int|null
     */
    protected $rating;

    /**
     * @var int|null
     */
    protected $status;

    /**
     * @var string|null
     */
    protected $createdAt;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_identifier' => 'productIdentifier',
        'productIdentifier' => 'productIdentifier',
        'ProductIdentifier' => 'productIdentifier',
        'customer_identifier' => 'customerIdentifier',
        'customerIdentifier' => 'customerIdentifier',
        'CustomerIdentifier' => 'customerIdentifier',
        'nickname' => 'nickname',
        'Nickname' => 'nickname',
        'locale' => 'locale',
        'Locale' => 'locale',
        'review_title' => 'reviewTitle',
        'reviewTitle' => 'reviewTitle',
        'ReviewTitle' => 'reviewTitle',
        'review_text' => 'reviewText',
        'reviewText' => 'reviewText',
        'ReviewText' => 'reviewText',
        'rating' => 'rating',
        'Rating' => 'rating',
        'status' => 'status',
        'Status' => 'status',
        'created_at' => 'createdAt',
        'createdAt' => 'createdAt',
        'CreatedAt' => 'createdAt',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CUSTOMER_IDENTIFIER => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'customer_identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NICKNAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'nickname',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'locale',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REVIEW_TITLE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'review_title',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REVIEW_TEXT => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'review_text',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::RATING => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'rating',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATUS => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'status',
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
     * @module ProductReview
     *
     * @param string|null $productIdentifier
     *
     * @return $this
     */
    public function setProductIdentifier($productIdentifier)
    {
        $this->productIdentifier = $productIdentifier;
        $this->modifiedProperties[self::PRODUCT_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module ProductReview
     *
     * @return string|null
     */
    public function getProductIdentifier()
    {
        return $this->productIdentifier;
    }

    /**
     * @module ProductReview
     *
     * @param string|null $productIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductIdentifierOrFail($productIdentifier)
    {
        if ($productIdentifier === null) {
            $this->throwNullValueException(static::PRODUCT_IDENTIFIER);
        }

        return $this->setProductIdentifier($productIdentifier);
    }

    /**
     * @module ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductIdentifierOrFail()
    {
        if ($this->productIdentifier === null) {
            $this->throwNullValueException(static::PRODUCT_IDENTIFIER);
        }

        return $this->productIdentifier;
    }

    /**
     * @module ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductIdentifier()
    {
        $this->assertPropertyIsSet(self::PRODUCT_IDENTIFIER);

        return $this;
    }

    /**
     * @module ProductReview
     *
     * @param string|null $customerIdentifier
     *
     * @return $this
     */
    public function setCustomerIdentifier($customerIdentifier)
    {
        $this->customerIdentifier = $customerIdentifier;
        $this->modifiedProperties[self::CUSTOMER_IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module ProductReview
     *
     * @return string|null
     */
    public function getCustomerIdentifier()
    {
        return $this->customerIdentifier;
    }

    /**
     * @module ProductReview
     *
     * @param string|null $customerIdentifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCustomerIdentifierOrFail($customerIdentifier)
    {
        if ($customerIdentifier === null) {
            $this->throwNullValueException(static::CUSTOMER_IDENTIFIER);
        }

        return $this->setCustomerIdentifier($customerIdentifier);
    }

    /**
     * @module ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCustomerIdentifierOrFail()
    {
        if ($this->customerIdentifier === null) {
            $this->throwNullValueException(static::CUSTOMER_IDENTIFIER);
        }

        return $this->customerIdentifier;
    }

    /**
     * @module ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCustomerIdentifier()
    {
        $this->assertPropertyIsSet(self::CUSTOMER_IDENTIFIER);

        return $this;
    }

    /**
     * @module ProductReview
     *
     * @param string|null $nickname
     *
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
        $this->modifiedProperties[self::NICKNAME] = true;

        return $this;
    }

    /**
     * @module ProductReview
     *
     * @return string|null
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @module ProductReview
     *
     * @param string|null $nickname
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNicknameOrFail($nickname)
    {
        if ($nickname === null) {
            $this->throwNullValueException(static::NICKNAME);
        }

        return $this->setNickname($nickname);
    }

    /**
     * @module ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNicknameOrFail()
    {
        if ($this->nickname === null) {
            $this->throwNullValueException(static::NICKNAME);
        }

        return $this->nickname;
    }

    /**
     * @module ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNickname()
    {
        $this->assertPropertyIsSet(self::NICKNAME);

        return $this;
    }

    /**
     * @module ProductReview
     *
     * @param string|null $locale
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        $this->modifiedProperties[self::LOCALE] = true;

        return $this;
    }

    /**
     * @module ProductReview
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @module ProductReview
     *
     * @param string|null $locale
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setLocaleOrFail($locale)
    {
        if ($locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->setLocale($locale);
    }

    /**
     * @module ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getLocaleOrFail()
    {
        if ($this->locale === null) {
            $this->throwNullValueException(static::LOCALE);
        }

        return $this->locale;
    }

    /**
     * @module ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocale()
    {
        $this->assertPropertyIsSet(self::LOCALE);

        return $this;
    }

    /**
     * @module ProductReview
     *
     * @param string|null $reviewTitle
     *
     * @return $this
     */
    public function setReviewTitle($reviewTitle)
    {
        $this->reviewTitle = $reviewTitle;
        $this->modifiedProperties[self::REVIEW_TITLE] = true;

        return $this;
    }

    /**
     * @module ProductReview
     *
     * @return string|null
     */
    public function getReviewTitle()
    {
        return $this->reviewTitle;
    }

    /**
     * @module ProductReview
     *
     * @param string|null $reviewTitle
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReviewTitleOrFail($reviewTitle)
    {
        if ($reviewTitle === null) {
            $this->throwNullValueException(static::REVIEW_TITLE);
        }

        return $this->setReviewTitle($reviewTitle);
    }

    /**
     * @module ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getReviewTitleOrFail()
    {
        if ($this->reviewTitle === null) {
            $this->throwNullValueException(static::REVIEW_TITLE);
        }

        return $this->reviewTitle;
    }

    /**
     * @module ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReviewTitle()
    {
        $this->assertPropertyIsSet(self::REVIEW_TITLE);

        return $this;
    }

    /**
     * @module ProductReview
     *
     * @param string|null $reviewText
     *
     * @return $this
     */
    public function setReviewText($reviewText)
    {
        $this->reviewText = $reviewText;
        $this->modifiedProperties[self::REVIEW_TEXT] = true;

        return $this;
    }

    /**
     * @module ProductReview
     *
     * @return string|null
     */
    public function getReviewText()
    {
        return $this->reviewText;
    }

    /**
     * @module ProductReview
     *
     * @param string|null $reviewText
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setReviewTextOrFail($reviewText)
    {
        if ($reviewText === null) {
            $this->throwNullValueException(static::REVIEW_TEXT);
        }

        return $this->setReviewText($reviewText);
    }

    /**
     * @module ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getReviewTextOrFail()
    {
        if ($this->reviewText === null) {
            $this->throwNullValueException(static::REVIEW_TEXT);
        }

        return $this->reviewText;
    }

    /**
     * @module ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireReviewText()
    {
        $this->assertPropertyIsSet(self::REVIEW_TEXT);

        return $this;
    }

    /**
     * @module ProductReview
     *
     * @param int|null $rating
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        $this->modifiedProperties[self::RATING] = true;

        return $this;
    }

    /**
     * @module ProductReview
     *
     * @return int|null
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @module ProductReview
     *
     * @param int|null $rating
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRatingOrFail($rating)
    {
        if ($rating === null) {
            $this->throwNullValueException(static::RATING);
        }

        return $this->setRating($rating);
    }

    /**
     * @module ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getRatingOrFail()
    {
        if ($this->rating === null) {
            $this->throwNullValueException(static::RATING);
        }

        return $this->rating;
    }

    /**
     * @module ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRating()
    {
        $this->assertPropertyIsSet(self::RATING);

        return $this;
    }

    /**
     * @module ProductReview
     *
     * @param int|null $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        $this->modifiedProperties[self::STATUS] = true;

        return $this;
    }

    /**
     * @module ProductReview
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @module ProductReview
     *
     * @param int|null $status
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStatusOrFail($status)
    {
        if ($status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->setStatus($status);
    }

    /**
     * @module ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getStatusOrFail()
    {
        if ($this->status === null) {
            $this->throwNullValueException(static::STATUS);
        }

        return $this->status;
    }

    /**
     * @module ProductReview
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStatus()
    {
        $this->assertPropertyIsSet(self::STATUS);

        return $this;
    }

    /**
     * @module ProductReview
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
     * @module ProductReview
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @module ProductReview
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
     * @module ProductReview
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
     * @module ProductReview
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
                case 'productIdentifier':
                case 'customerIdentifier':
                case 'nickname':
                case 'locale':
                case 'reviewTitle':
                case 'reviewText':
                case 'rating':
                case 'status':
                case 'createdAt':
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
                case 'productIdentifier':
                case 'customerIdentifier':
                case 'nickname':
                case 'locale':
                case 'reviewTitle':
                case 'reviewText':
                case 'rating':
                case 'status':
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
                case 'productIdentifier':
                case 'customerIdentifier':
                case 'nickname':
                case 'locale':
                case 'reviewTitle':
                case 'reviewText':
                case 'rating':
                case 'status':
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
            'productIdentifier' => $this->productIdentifier,
            'customerIdentifier' => $this->customerIdentifier,
            'nickname' => $this->nickname,
            'locale' => $this->locale,
            'reviewTitle' => $this->reviewTitle,
            'reviewText' => $this->reviewText,
            'rating' => $this->rating,
            'status' => $this->status,
            'createdAt' => $this->createdAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_identifier' => $this->productIdentifier,
            'customer_identifier' => $this->customerIdentifier,
            'nickname' => $this->nickname,
            'locale' => $this->locale,
            'review_title' => $this->reviewTitle,
            'review_text' => $this->reviewText,
            'rating' => $this->rating,
            'status' => $this->status,
            'created_at' => $this->createdAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_identifier' => $this->productIdentifier instanceof AbstractTransfer ? $this->productIdentifier->toArray(true, false) : $this->productIdentifier,
            'customer_identifier' => $this->customerIdentifier instanceof AbstractTransfer ? $this->customerIdentifier->toArray(true, false) : $this->customerIdentifier,
            'nickname' => $this->nickname instanceof AbstractTransfer ? $this->nickname->toArray(true, false) : $this->nickname,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, false) : $this->locale,
            'review_title' => $this->reviewTitle instanceof AbstractTransfer ? $this->reviewTitle->toArray(true, false) : $this->reviewTitle,
            'review_text' => $this->reviewText instanceof AbstractTransfer ? $this->reviewText->toArray(true, false) : $this->reviewText,
            'rating' => $this->rating instanceof AbstractTransfer ? $this->rating->toArray(true, false) : $this->rating,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, false) : $this->status,
            'created_at' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, false) : $this->createdAt,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productIdentifier' => $this->productIdentifier instanceof AbstractTransfer ? $this->productIdentifier->toArray(true, true) : $this->productIdentifier,
            'customerIdentifier' => $this->customerIdentifier instanceof AbstractTransfer ? $this->customerIdentifier->toArray(true, true) : $this->customerIdentifier,
            'nickname' => $this->nickname instanceof AbstractTransfer ? $this->nickname->toArray(true, true) : $this->nickname,
            'locale' => $this->locale instanceof AbstractTransfer ? $this->locale->toArray(true, true) : $this->locale,
            'reviewTitle' => $this->reviewTitle instanceof AbstractTransfer ? $this->reviewTitle->toArray(true, true) : $this->reviewTitle,
            'reviewText' => $this->reviewText instanceof AbstractTransfer ? $this->reviewText->toArray(true, true) : $this->reviewText,
            'rating' => $this->rating instanceof AbstractTransfer ? $this->rating->toArray(true, true) : $this->rating,
            'status' => $this->status instanceof AbstractTransfer ? $this->status->toArray(true, true) : $this->status,
            'createdAt' => $this->createdAt instanceof AbstractTransfer ? $this->createdAt->toArray(true, true) : $this->createdAt,
        ];
    }
}
