<?php

declare(strict_types=1);

namespace Pyz\Glue\AntelopeLocationBackendApi\Controller;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Spryker\Glue\Kernel\Backend\Controller\AbstractController;

/**
 * @method \Pyz\Glue\AntelopeLocationBackendApi\AntelopeLocationBackendApiFactory getFactory()
 */
class AntelopeLocationResourceController extends AbstractController
{
    public function getCollectionAction(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        return $this->getFactory()->createAntelopeLocationReader()->getCollection($glueRequestTransfer);
    }

    public function getAction(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        return $this->getFactory()->createAntelopeLocationReader()->get($glueRequestTransfer);
    }

    public function postAction(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        return $this->getFactory()->createAntelopeLocationWriter()->create($glueRequestTransfer);
    }

    public function putAction(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        return $this->getFactory()->createAntelopeLocationWriter()->update($glueRequestTransfer);
    }

    public function deleteAction(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        return $this->getFactory()->createAntelopeLocationWriter()->delete($glueRequestTransfer);
    }
}
