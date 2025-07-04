<?php
require_once 'DecoratorBebida.php';

class Leite extends DecoratorBebida
{
   public function getDescricao(): string
   {
      return $this->bebida->getDescricao() . ", leite";
   }
   public function custo(): float
   {
      return $this->bebida->custo() + 1.5;
   }
}
