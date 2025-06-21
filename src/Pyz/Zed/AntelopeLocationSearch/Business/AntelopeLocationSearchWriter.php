<?php

namespace Pyz\Zed\AntelopeLocationSearch\Business\Writer;

use Orm\Zed\Antelope\Persistence\PyzAntelopeLocationQuery;
use Orm\Zed\AntelopeLocationSearch\Persistence\PyzAntelopeLocationSearch;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;

class AntelopeLocationSearchWriter
{
    use TransactionTrait;

    public function publish(array $antelopeLocationIds): void
    {
        $this->getTransactionHandler()->handleTransaction(function () use ($antelopeLocationIds): void {
            foreach ($antelopeLocationIds as $id) {
                $locationEntity = PyzAntelopeLocationQuery::create()->findOneByIdAntelopeLocation($id);
                if (!$locationEntity) {
                    continue;
                }

                $searchEntity = new PyzAntelopeLocationSearch();
                $searchEntity->setFkAntelopeLocation($id);
                $searchEntity->setName($locationEntity->getName());
                $searchEntity->setLocation($locationEntity->getLocation());
                $searchEntity->save();
            }
        });
    }
}
