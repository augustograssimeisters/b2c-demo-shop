<?php

namespace Pyz\Glue\AntelopeLocationBackendApi\Processor\Writer;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Pyz\Zed\AntelopeLocation\Business\AntelopeLocationFacadeInterface;

interface AntelopeLocationWriterInterface
{
    public function create(GlueRequestTransfer $request): GlueResponseTransfer;
    public function update(GlueRequestTransfer $request): GlueResponseTransfer;
    public function delete(GlueRequestTransfer $request): GlueResponseTransfer;
}

class AntelopeLocationWriter implements AntelopeLocationWriterInterface
{
    public function __construct(
        private readonly AntelopeLocationFacadeInterface $facade
    ) {}

    public function create(GlueRequestTransfer $request): GlueResponseTransfer
    {
        $response = new GlueResponseTransfer();

        return $response;
    }

    public function update(GlueRequestTransfer $request): GlueResponseTransfer
    {
        $response = new GlueResponseTransfer();
        return $response;
    }

    public function delete(GlueRequestTransfer $request): GlueResponseTransfer
    {
        $response = new GlueResponseTransfer();
        return $response;
    }
}
