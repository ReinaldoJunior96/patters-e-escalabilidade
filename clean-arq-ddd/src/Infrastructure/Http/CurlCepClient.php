<?php

namespace Infrastructure\Http;

use Domain\Cep\CepClient;
use Domain\Cep\CepInfo;

class CurlCepClient implements CepClient
{
   public function buscarCep(string $cep): ?CepInfo
   {
      $url = "https://viacep.com.br/ws/{$cep}/json/";
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch);
      curl_close($ch);
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
