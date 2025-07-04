<?php

namespace Infrastructure\Http;

use Domain\Cep\CepClient;
use Domain\Cep\CepInfo;

class FileGetContentsCepClient implements CepClient
{
   public function buscarCep(string $cep): ?CepInfo
   {
      $url = "https://viacep.com.br/ws/{$cep}/json/";
      $result = file_get_contents($url);
      $data = json_decode($result, true);
      if (isset($data['erro']) && $data['erro']) {
         return null;
      }
      return new CepInfo(
         $data['cep'] ?? '',
         $data['logradouro'] ?? '',
         $data['bairro'] ?? '',
         $data['localidade'] ?? '',
         $data['uf'] ?? ''
      );
   }
}
