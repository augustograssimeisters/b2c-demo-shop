<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\AclUserHasGroupCriteriaTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class AclUserHasGroupCriteriaBuilder extends AbstractDataBuilder
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
        'aclUserHasGroupConditions' => 'AclUserHasGroupConditions',
    ];

    /**
     * @return \Generated\Shared\Transfer\AclUserHasGroupCriteriaTransfer
     */
    public function build(): AclUserHasGroupCriteriaTransfer
    {
        /** @var \Generated\Shared\Transfer\AclUserHasGroupCriteriaTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\AclUserHasGroupCriteriaTransfer
     */
    public function getTransfer(): AclUserHasGroupCriteriaTransfer
    {
        return new AclUserHasGroupCriteriaTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAclUserHasGroupConditions($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('aclUserHasGroupConditions', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('aclUserHasGroupConditions', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherAclUserHasGroupConditions($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('aclUserHasGroupConditions', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('aclUserHasGroupConditions', $overrideOrBuilder, true);

        return $this;
    }
}
