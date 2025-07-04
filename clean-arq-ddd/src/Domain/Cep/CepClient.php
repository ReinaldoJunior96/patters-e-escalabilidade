<?php

namespace Domain\Cep;

interface CepClient
{
   public function buscarCep(string $cep): ?CepInfo;
}
