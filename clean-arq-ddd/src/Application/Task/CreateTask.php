<?php

namespace Application\Task;

use Domain\Task\Task;
use Domain\Task\TaskRepository;

class CreateTask
{
   private TaskRepository $repository;
   public function __construct(TaskRepository $repository)
   {
      $this->repository = $repository;
   }
   public function __invoke(CreateTaskDTO $dto): Task
   {
      $task = new Task(uniqid(), $dto->title);
      $this->repository->save($task);
      return $task;
   }
}
