<?php

namespace Pyz\Zed\AntelopeLocationGui\Communication;

use Generated\Shared\Transfer\AntelopeLocationTransfer;
use Pyz\Zed\AntelopeLocationGui\Communication\Form\AntelopeLocationCreateForm;
use Pyz\Zed\AntelopeLocationGui\Communication\Table\AntelopeLocationTable;
use Orm\Zed\AntelopeLocation\Persistence\PyzAntelopeLocationQuery;
use Pyz\Zed\AntelopeLocationGui\AntelopeLocationGuiDependencyProvider;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use Symfony\Component\Form\FormInterface;

class AntelopeLocationGuiCommunicationFactory extends AbstractCommunicationFactory
{
    public function createAntelopeLocationCreateForm(AntelopeLocationTransfer $antelopeLocationTransfer, array $options = []): FormInterface
    {
        return $this->getFormFactory()->create(AntelopeLocationCreateForm::class, $antelopeLocationTransfer, $options);
    }

    public function createAntelopeLocationTable(): AntelopeLocationTable
    {
        return new AntelopeLocationTable(
            $this->getAntelopeLocationPropelQuery()
        );
    }

    public function getAntelopeLocationPropelQuery(): PyzAntelopeLocationQuery
    {
        return $this->getProvidedDependency(AntelopeLocationGuiDependencyProvider::PROPEL_QUERY_ANTELOPE_LOCATION);
    }

    public function getAntelopeFacade()
    {
        return $this->getProvidedDependency(AntelopeLocationGuiDependencyProvider::FACADE_ANTELOPE);
    }
}
