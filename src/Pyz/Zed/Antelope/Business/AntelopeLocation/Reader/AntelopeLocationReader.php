<?php

namespace Pyz\Zed\Antelope\Business\AntelopeLocation\Reader;

use Generated\Shared\Transfer\AntelopeLocationTransfer;
use Pyz\Zed\Antelope\Persistence\AntelopeRepositoryInterface;

class AntelopeLocationReader
{
    protected AntelopeRepositoryInterface $repository;

    public function __construct(AntelopeRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function findLocationById(int $id): ?AntelopeLocationTransfer
    {
        return $this->repository->findLocationById($id);
    }
}
