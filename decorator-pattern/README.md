# Padrão Decorator

O padrão Decorator permite adicionar funcionalidades a objetos de forma flexível e dinâmica, sem alterar sua estrutura original. Ele é muito utilizado para seguir o princípio aberto/fechado (Open/Closed Principle) da programação orientada a objetos.

## Estrutura
- Interface ou classe base (ex: `Bebida`)
- Implementação concreta (ex: `Cafe`)
- Decoradores que estendem a funcionalidade (ex: `Leite`, `Chocolate`)

## Exemplo Clássico
Imagine um sistema de pedidos de café, onde você pode adicionar complementos como leite ou chocolate sem criar uma nova subclasse para cada combinação.

## Arquivos
- `src/` — Implementação do padrão Decorator
- `tests/` — Testes unitários
- `main.php` — Arquivo de entrada para rodar exemplos

## Links úteis
- [Refactoring Guru - Decorator](https://refactoring.guru/pt-br/design-patterns/decorator)
- [Wikipedia - Decorator pattern](https://en.wikipedia.org/wiki/Decorator_pattern)
