<?php

namespace Pyz\Zed\Antelope\Business;

use Generated\Shared\Transfer\AntelopeLocationTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\Antelope\Business\AntelopeBusinessFactory getFactory()
 */
class AntelopeFacade extends AbstractFacade implements AntelopeFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeLocationTransfer $transfer
     *
     * @return \Generated\Shared\Transfer\AntelopeLocationTransfer
     */
    public function createLocation(AntelopeLocationTransfer $transfer): AntelopeLocationTransfer
    {
        return $this->getFactory()
            ->createAntelopeLocationWriter()
            ->createLocation($transfer);
    }

    /**
     * @param int $id
     *
     * @return \Generated\Shared\Transfer\AntelopeLocationTransfer|null
     */
    public function findLocationById(int $id): ?AntelopeLocationTransfer
    {
        return $this->getFactory()
            ->createAntelopeLocationReader()
            ->findLocationById($id);
    }

    /**
     * Exemplo de método para buscar um Antelope com localização (se já existir na sua implementação)
     *
     * @param int $idAntelope
     * @return \Generated\Shared\Transfer\AntelopeTransfer|null
     */
    public function getAntelopeById(int $idAntelope): ?AntelopeTransfer
    {
        return $this->getFactory()
            ->createAntelopeReader()
            ->getAntelopeById($idAntelope);
    }
}
