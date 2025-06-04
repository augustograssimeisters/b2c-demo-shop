<?php

namespace Pyz\Zed\AntelopeLocationGui\Communication\Controller;

use Generated\Shared\Transfer\AntelopeLocationTransfer;
use Pyz\Zed\AntelopeLocationGui\Communication\Form\AntelopeLocationCreateForm;
use Pyz\Zed\AntelopeLocationGui\Communication\Table\AntelopeLocationTable;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\AntelopeLocationGui\Communication\AntelopeLocationGuiCommunicationFactory getFactory()
 */
class IndexController extends AbstractController
{
    protected const MESSAGE_ANTELLOPE_LOCATION_CREATED = 'Antelope Location was successfully created.';
    protected const URL_LOCATION_INDEX = '/antelope-location-gui';

    public function indexAction(Request $request)
    {
        $antelopeLocationTransfer = new AntelopeLocationTransfer();

        $form = $this->getFactory()
            ->createAntelopeLocationCreateForm($antelopeLocationTransfer)
            ->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->handleCreateAntelopeLocation($form);
        }

        return $this->viewResponse([
            'antelopeLocationTable' => $this->getFactory()->createAntelopeLocationTable()->render(),
            'antelopeLocationCreateForm' => $form->createView(),
        ]);
    }

    protected function handleCreateAntelopeLocation(FormInterface $form)
    {
        /** @var AntelopeLocationTransfer $antelopeLocationTransfer */
        $antelopeLocationTransfer = $form->getData();

        $this->getFactory()
            ->getAntelopeFacade()
            ->createAntelopeLocation($antelopeLocationTransfer);

        $this->addSuccessMessage(static::MESSAGE_ANTELLOPE_LOCATION_CREATED);

        return $this->redirectResponse(static::URL_LOCATION_INDEX);
    }
}
