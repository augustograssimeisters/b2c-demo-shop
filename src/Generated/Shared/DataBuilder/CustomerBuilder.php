<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\CustomerTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class CustomerBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "email" => "unique()->email()",
        "isGuest" => "=false",
        "password" => "=testPassword1_",
        "salutation" => "randomElement(['Mr', 'Mrs'])",
        "firstName" => "firstName()",
        "lastName" => "lastName()",
        "company" => "company()",
        "gender" => "randomElement(['Male', 'Female'])",
        "dateOfBirth" => "date('Y-m-d', '-20 years')",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'companyUserTransfer' => 'CompanyUser',
        'addresses' => 'Addresses',
        'billingAddress' => 'Address',
        'shippingAddress' => 'Address',
        'locale' => 'Locale',
        'customerProductListCollection' => 'CustomerProductListCollection',
    ];

    /**
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function build(): CustomerTransfer
    {
        /** @var \Generated\Shared\Transfer\CustomerTransfer $transfer */
        $transfer = parent::build();

        return $transfer;
    }

    /**
     * @param string $builder
     *
     * @throws \Exception
     *
     * @return \Spryker\Shared\Testify\AbstractDataBuilder
     */
    protected function locateDataBuilder($builder)
    {
        $builderClass = __NAMESPACE__ . "\\{$builder}Builder";

        if (!class_exists($builderClass)) {
            throw new Exception("Builder '$builderClass' not found");
        }

        return new $builderClass;
    }

    /**
     * @return \Generated\Shared\Transfer\CustomerTransfer
     */
    public function getTransfer(): CustomerTransfer
    {
        return new CustomerTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withCompanyUserTransfer($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('companyUserTransfer', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('companyUserTransfer', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherCompanyUserTransfer($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('companyUserTransfer', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('companyUserTransfer', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAddresses($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('addresses', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('addresses', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherAddresses($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('addresses', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('addresses', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withBillingAddress($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('billingAddress', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('billingAddress', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherBillingAddress($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('billingAddress', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('billingAddress', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withShippingAddress($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('shippingAddress', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('shippingAddress', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherShippingAddress($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('shippingAddress', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('shippingAddress', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withLocale($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('locale', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('locale', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherLocale($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('locale', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('locale', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withCustomerProductListCollection($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('customerProductListCollection', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('customerProductListCollection', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherCustomerProductListCollection($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('customerProductListCollection', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('customerProductListCollection', $overrideOrBuilder, true);

        return $this;
    }
}
