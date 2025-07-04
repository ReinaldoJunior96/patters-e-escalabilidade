<?php
require_once 'DecoratorBebida.php';

class Chocolate extends DecoratorBebida
{
   public function getDescricao(): string
   {
      return $this->bebida->getDescricao() . ", chocolate";
   }
   public function custo(): float
   {
      return $this->bebida->custo() + 2.0;
   }
}
