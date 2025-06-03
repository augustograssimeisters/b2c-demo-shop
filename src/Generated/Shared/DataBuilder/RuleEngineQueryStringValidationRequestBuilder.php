<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\RuleEngineQueryStringValidationRequestTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class RuleEngineQueryStringValidationRequestBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'ruleEngineSpecificationProviderRequest' => 'RuleEngineSpecificationProviderRequest',
    ];

    /**
     * @return \Generated\Shared\Transfer\RuleEngineQueryStringValidationRequestTransfer
     */
    public function build(): RuleEngineQueryStringValidationRequestTransfer
    {
        /** @var \Generated\Shared\Transfer\RuleEngineQueryStringValidationRequestTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\RuleEngineQueryStringValidationRequestTransfer
     */
    public function getTransfer(): RuleEngineQueryStringValidationRequestTransfer
    {
        return new RuleEngineQueryStringValidationRequestTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withRuleEngineSpecificationProviderRequest($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('ruleEngineSpecificationProviderRequest', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('ruleEngineSpecificationProviderRequest', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherRuleEngineSpecificationProviderRequest($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('ruleEngineSpecificationProviderRequest', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('ruleEngineSpecificationProviderRequest', $overrideOrBuilder, true);

        return $this;
    }
}
