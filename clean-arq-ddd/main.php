<?php
require_once __DIR__ . '/vendor/autoload.php';

use Infrastructure\Repository\InMemoryTaskRepository;
use Application\Task\CreateTask;
use Application\Task\CreateTaskDTO;
use Application\Task\ListTasks;
use Infrastructure\Http\CurlCepClient;
use Infrastructure\Http\FileGetContentsCepClient;
use Application\Cep\BuscarCep;

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

echo "\n---\n\n";

// Exemplo de busca de CEP
// Troque entre CurlCepClient e FileGetContentsCepClient para ver a inversão de dependência
//$cepClient = new CurlCepClient();
$cepClient = new FileGetContentsCepClient();
$buscarCep = new BuscarCep($cepClient);

// Exemplo programático
$info = $buscarCep('01001000');
if ($info) {
   echo "Busca programática de CEP 01001000:\n";
   echo "CEP: {$info->cep}\nLogradouro: {$info->logradouro}\nBairro: {$info->bairro}\nCidade: {$info->localidade}\nUF: {$info->uf}\n";
} else {
   echo "CEP não encontrado.\n";
}
