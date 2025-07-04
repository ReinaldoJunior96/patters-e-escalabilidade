# Exemplo de Observer Pattern em PHP

O padrão Observer permite que objetos (Observers) sejam notificados automaticamente quando o estado de outro objeto (Subject) muda. É muito usado para implementar sistemas de eventos, notificações e reatividade.

## Estrutura
- `Subject` (ou Observable): mantém uma lista de observers e notifica todos quando algo muda.
- `Observer`: interface para objetos que querem ser notificados.
- `ConcreteSubject`: implementação concreta do Subject.
- `ConcreteObserver`: implementação concreta do Observer.

## Exemplo deste projeto
Vamos simular um sistema de notificações de temperatura:
- Quando a temperatura muda, todos os observers são notificados.
- Observers podem ser, por exemplo, um display de temperatura e um alerta de calor.

## Como rodar
1. Instale o PHP (>=8.1)
2. Execute:
   ```bash
   php main.php
   ```
Você verá as notificações dos observers no terminal.

## Referências
- [Refactoring Guru - Observer](https://refactoring.guru/pt-br/design-patterns/observer)
- [Wikipedia - Observer pattern](https://en.wikipedia.org/wiki/Observer_pattern)
