<?php

namespace Domain\Task;

interface TaskRepository
{
   public function save(Task $task): void;
   public function findById(string $id): ?Task;
   public function findAll(): array;
}
