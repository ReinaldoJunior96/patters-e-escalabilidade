<?php

namespace Application\Task;

use Domain\Task\TaskRepository;

class ListTasks
{
   private TaskRepository $repository;
   public function __construct(TaskRepository $repository)
   {
      $this->repository = $repository;
   }
   public function execute(): array
   {
      return $this->repository->findAll();
   }
}
