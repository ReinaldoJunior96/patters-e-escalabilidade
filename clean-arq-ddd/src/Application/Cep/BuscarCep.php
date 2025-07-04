<?php

namespace Application\Cep;

use Domain\Cep\CepClient;
use Domain\Cep\CepInfo;

class BuscarCep
{
   private CepClient $client;
   public function __construct(CepClient $client)
   {
      $this->client = $client;
   }
   public function __invoke(string $cep): ?CepInfo
   {
      return $this->client->buscarCep($cep);
   }
}
