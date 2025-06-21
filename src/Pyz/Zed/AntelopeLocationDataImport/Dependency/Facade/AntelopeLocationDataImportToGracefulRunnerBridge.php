<?php

namespace Pyz\Zed\AntelopeLocationDataImport\Dependency\Facade;

use Generator;
use Spryker\Zed\DataImport\Dependency\Facade\DataImportToGracefulRunnerInterface;
use Spryker\Zed\GracefulRunner\Business\GracefulRunnerFacadeInterface;

class AntelopeLocationDataImportToGracefulRunnerBridge implements DataImportToGracefulRunnerInterface
{
    protected GracefulRunnerFacadeInterface $gracefulRunnerFacade;

    public function __construct(GracefulRunnerFacadeInterface $gracefulRunnerFacade)
    {
        $this->gracefulRunnerFacade = $gracefulRunnerFacade;
    }

    public function run(Generator $generator, ?string $throwableClassName = null): int
    {
        return $this->gracefulRunnerFacade->run($generator, $throwableClassName);
    }
}
