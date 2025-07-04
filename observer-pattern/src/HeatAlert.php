<?php
require_once 'Observer.php';

// Outro ConcreteObserver
class HeatAlert implements Observer
{
   public function update(float $temperatura): void
   {
      if ($temperatura >= 30) {
         echo "[Alerta] Temperatura muito alta! ({$temperatura}°C)\n";
      }
   }
}
