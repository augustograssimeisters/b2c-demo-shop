<?php

namespace Pyz\Zed\Antelope\Communication\Controller;

use Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeLocationResponseTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @method \Pyz\Zed\Antelope\Business\AntelopeFacadeInterface getFacade()
 */
class GatewayController extends AbstractController
{
    public function getAntelopeLocationAction(Request $request)
    {
        $criteriaArray = json_decode($request->getContent(), true);

        $criteriaTransfer = new AntelopeLocationCriteriaTransfer();
        $criteriaTransfer->fromArray($criteriaArray, true);

        /** @var AntelopeLocationResponseTransfer $responseTransfer */
        $responseTransfer = $this->getFacade()->getAntelopeLocations($criteriaTransfer);

        return new JsonResponse($responseTransfer->toArray());
    }
}
