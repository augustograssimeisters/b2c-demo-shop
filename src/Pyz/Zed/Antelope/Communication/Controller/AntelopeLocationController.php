<?php

namespace Pyz\Zed\Antelope\Communication\Controller;

use Generated\Shared\Transfer\AntelopeLocationTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @method \Pyz\Zed\Antelope\Business\AntelopeFacadeInterface getFacade()
 */
class AntelopeLocationController extends AbstractController
{
    public function addAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $locationTransfer = new AntelopeLocationTransfer();
        $locationTransfer->fromArray($data, true);

        $locationTransfer = $this->getFacade()->createAntelopeLocation($locationTransfer);

        return new JsonResponse($locationTransfer->toArray(), 201);
    }

    public function listAction(Request $request)
    {
        $locations = $this->getFacade()->getAllAntelopeLocations();

        return new JsonResponse($locations);
    }
}
