<?php
require_once __DIR__ . '/vendor/autoload.php';

use Infrastructure\Repository\InMemoryTaskRepository;
use Application\Task\CreateTask;
use Application\Task\CreateTaskDTO;
use Application\Task\ListTasks;

// Injeção de dependências
$repo = new InMemoryTaskRepository();
$createTask = new CreateTask($repo);
$listTasks = new ListTasks($repo);

// Exemplo: criar tarefas
$createTask(new CreateTaskDTO('Estudar Clean Architecture'));
$createTask(new CreateTaskDTO('Implementar testes'));

// Exemplo: listar tarefas
$tasks = $listTasks->execute();
echo "Tarefas cadastradas:\n";
foreach ($tasks as $task) {
   echo "{$task->getId()} - {$task->getTitle()}" . ($task->isDone() ? " [Feita]" : "") . "\n";
}

// Para trocar o repositório, basta criar outro adaptador e trocar aqui.
