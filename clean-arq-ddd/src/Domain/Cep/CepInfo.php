<?php

namespace Domain\Cep;

class CepInfo
{
   public string $cep;
   public string $logradouro;
   public string $bairro;
   public string $localidade;
   public string $uf;

   public function __construct(string $cep, string $logradouro, string $bairro, string $localidade, string $uf)
   {
      $this->cep = $cep;
      $this->logradouro = $logradouro;
      $this->bairro = $bairro;
      $this->localidade = $localidade;
      $this->uf = $uf;
   }
}
