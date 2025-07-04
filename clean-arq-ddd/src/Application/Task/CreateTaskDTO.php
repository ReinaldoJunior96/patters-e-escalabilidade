<?php

namespace Application\Task;

class CreateTaskDTO
{
   public string $title;
   public function __construct(string $title)
   {
      $this->title = $title;
   }
}
