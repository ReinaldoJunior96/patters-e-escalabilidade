<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Infrastructure\Repository\InMemoryTaskRepository;
use Application\Task\CreateTask;
use Application\Task\CreateTaskDTO;
use Application\Task\ListTasks;

$repo = new InMemoryTaskRepository();
$createTask = new CreateTask($repo);
$listTasks = new ListTasks($repo);

$createTask(new CreateTaskDTO('Estudar Clean Architecture'));
$createTask(new CreateTaskDTO('Implementar testes'));

$tasks = $listTasks->execute();
assert(count($tasks) === 2);
echo "Testes de tarefas passaram!\n";
