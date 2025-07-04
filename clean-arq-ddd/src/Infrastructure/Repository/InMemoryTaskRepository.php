<?php

namespace Infrastructure\Repository;

use Domain\Task\Task;
use Domain\Task\TaskRepository;

class InMemoryTaskRepository implements TaskRepository
{
   private array $tasks = [];
   public function save(Task $task): void
   {
      $this->tasks[$task->getId()] = $task;
   }
   public function findById(string $id): ?Task
   {
      return $this->tasks[$id] ?? null;
   }
   public function findAll(): array
   {
      return array_values($this->tasks);
   }
}
