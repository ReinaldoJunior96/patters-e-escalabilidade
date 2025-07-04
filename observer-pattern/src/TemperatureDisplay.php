<?php
require_once 'Observer.php';

// ConcreteObserver
class TemperatureDisplay implements Observer
{
   public function update(float $temperatura): void
   {
      echo "[Display] Temperatura atual: {$temperatura}°C\n";
   }
}
