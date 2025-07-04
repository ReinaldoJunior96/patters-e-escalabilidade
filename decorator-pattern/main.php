<?php
require_once __DIR__ . '/src/Cafe.php';
require_once __DIR__ . '/src/Leite.php';
require_once __DIR__ . '/src/Chocolate.php';

$cafe = new Cafe();
echo $cafe->getDescricao() . " custa R$" . $cafe->custo() . "\n";

$cafeComLeite = new Leite($cafe);
echo $cafeComLeite->getDescricao() . " custa R$" . $cafeComLeite->custo() . "\n";

$cafeComLeiteChocolate = new Chocolate($cafeComLeite);
echo $cafeComLeiteChocolate->getDescricao() . " custa R$" . $cafeComLeiteChocolate->custo() . "\n";
