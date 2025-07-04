<?php

namespace Domain\Task;

class Task
{
   private string $id;
   private string $title;
   private bool $done;

   public function __construct(string $id, string $title, bool $done = false)
   {
      $this->id = $id;
      $this->title = $title;
      $this->done = $done;
   }

   public function getId(): string
   {
      return $this->id;
   }
   public function getTitle(): string
   {
      return $this->title;
   }
   public function isDone(): bool
   {
      return $this->done;
   }
   public function markAsDone(): void
   {
      $this->done = true;
   }
}
