<?php

namespace Pyz\Glue\AntelopeLocationBackendApi\Processor\Reader;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Pyz\Zed\AntelopeLocation\Business\AntelopeLocationFacadeInterface;

interface AntelopeLocationReaderInterface
{
    public function getCollection(GlueRequestTransfer $request): GlueResponseTransfer;
    public function get(GlueRequestTransfer $request): GlueResponseTransfer;
}

class AntelopeLocationReader implements AntelopeLocationReaderInterface
{
    public function __construct(
        private readonly AntelopeLocationFacadeInterface $facade
    ) {}

    public function getCollection(GlueRequestTransfer $request): GlueResponseTransfer
    {
        // Exemplo simplificado, deve chamar o facade e montar a resposta com GlueResponseTransfer
        // TODO: implementar corretamente chamando o facade e construindo a resposta
        $response = new GlueResponseTransfer();
        // Buscar coleção da fachada (facade)
        // Preencher GlueResponseTransfer...
        return $response;
    }

    public function get(GlueRequestTransfer $request): GlueResponseTransfer
    {
        $response = new GlueResponseTransfer();
        // Buscar por id e montar a resposta
        // TODO: implementar corretamente
        return $response;
    }
}
