<?php
require_once 'Bebida.php';

// Decorator abstrato
abstract class DecoratorBebida implements Bebida
{
   protected Bebida $bebida;
   public function __construct(Bebida $bebida)
   {
      $this->bebida = $bebida;
   }
   public function getDescricao(): string
   {
      return $this->bebida->getDescricao();
   }
}
