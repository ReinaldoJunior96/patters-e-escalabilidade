<?php
require_once 'Subject.php';
require_once 'Observer.php';

// ConcreteSubject
class WeatherStation implements Subject
{
   private array $observers = [];
   private float $temperatura = 0.0;

   public function attach(Observer $observer): void
   {
      $this->observers[] = $observer;
   }
   public function detach(Observer $observer): void
   {
      $this->observers = array_filter(
         $this->observers,
         fn($obs) => $obs !== $observer
      );
   }
   public function setTemperatura(float $temperatura): void
   {
      $this->temperatura = $temperatura;
      $this->notify();
   }
   public function notify(): void
   {
      foreach ($this->observers as $observer) {
         $observer->update($this->temperatura);
      }
   }
}
