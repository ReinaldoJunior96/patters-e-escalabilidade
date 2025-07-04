<?php
require_once 'Bebida.php';

class Cafe implements Bebida
{
   public function getDescricao(): string
   {
      return "Café";
   }
   public function custo(): float
   {
      return 5.0;
   }
}
