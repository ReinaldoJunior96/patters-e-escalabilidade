<?php
require_once __DIR__ . '/../src/Cafe.php';
require_once __DIR__ . '/../src/Leite.php';
require_once __DIR__ . '/../src/Chocolate.php';

echo "Testando Decorator...\n";
$cafe = new Cafe();
assert($cafe->custo() === 5.0);

$cafeLeite = new Leite($cafe);
assert($cafeLeite->custo() === 6.5);

$cafeLeiteChoc = new Chocolate($cafeLeite);
assert($cafeLeiteChoc->custo() === 8.5);
echo "Todos os testes passaram!\n";
