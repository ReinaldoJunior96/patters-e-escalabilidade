# Exemplo de Clean Architecture com DDD e Adaptadores

Este projeto demonstra uma estrutura base de Clean Architecture em PHP, utilizando DDD (Domain-Driven Design) e adaptadores para fácil troca de implementações.

## O que é Clean Architecture?
A Clean Architecture (Arquitetura Limpa) propõe a separação do sistema em camadas bem definidas, onde as regras de negócio (domínio) ficam isoladas das implementações técnicas (infraestrutura, frameworks, bancos de dados, etc). Isso facilita testes, manutenção, evolução e troca de tecnologias.

## O que é DDD?
Domain-Driven Design (DDD) é uma abordagem para modelar o software a partir do domínio do negócio, focando em entidades, regras e casos de uso reais. O código reflete o vocabulário e as necessidades do negócio.

## Camadas do Projeto
- **Domain**: Entidades, Value Objects, interfaces de repositórios e regras de negócio puras. Não depende de nada externo.
- **Application**: Casos de uso (Use Cases) e DTOs. Orquestra as regras do domínio, mas não sabe como os dados são persistidos.
- **Infrastructure**: Implementações técnicas (repositórios, serviços externos, banco de dados, etc). Depende do domínio, mas nunca o contrário.
- **Adapters**: Pontos de entrada/saída (CLI, HTTP, etc). Adaptam a comunicação externa para os casos de uso.

## Funcionalidade escolhida
**Cadastro e consulta de tarefas (ToDo)**
- Permite criar uma tarefa e consultar tarefas cadastradas.
- O domínio é "Tarefa" (Task), mas a estrutura permite crescer para outros domínios facilmente.

## Estrutura de Pastas
- `src/Domain/` — Entidades, Value Objects, Repositórios e regras de negócio
- `src/Application/` — Casos de uso (Use Cases) e DTOs
- `src/Infrastructure/` — Adaptadores (ex: repositório em memória, banco de dados, API externa)
- `src/Adapters/` — Adaptadores de entrada/saída (ex: CLI, HTTP, etc)
- `tests/` — Testes unitários e de integração
- `main.php` — Ponto de entrada para rodar exemplos

## Como trocar adaptadores?
Basta alterar a injeção de dependências no ponto de entrada (`main.php`). Por exemplo, para trocar o repositório em memória por um de banco de dados, basta criar a implementação e trocar a instância no `main.php`.

## Exemplo de uso
```bash
php main.php add "Minha tarefa"
php main.php list
php tests/TaskTest.php
```

## Como evoluir?
- Adicione novos domínios (ex: Usuário, Projeto)
- Implemente novos adaptadores (ex: HTTP, banco de dados)
- Siga os comentários nos arquivos para entender cada camada

## Referências
- [Clean Architecture - Uncle Bob](https://8thlight.com/blog/uncle-bob/2012/08/13/the-clean-architecture.html)
- [DDD - Domain Driven Design](https://martinfowler.com/bliki/DomainDrivenDesign.html)
- [Refactoring Guru - DDD](https://refactoring.guru/pt-br/design-patterns/ddd)

---

Siga os comentários nos arquivos para entender cada camada e como evoluir a estrutura.
