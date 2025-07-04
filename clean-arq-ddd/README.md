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

## Funcionalidades implementadas

### 1. Cadastro e consulta de tarefas (ToDo)
- Permite criar uma tarefa e consultar tarefas cadastradas.
- O domínio é "Tarefa" (Task), mas a estrutura permite crescer para outros domínios facilmente.
- O fluxo é programático: ao rodar `php main.php`, duas tarefas são criadas e listadas automaticamente.

**Fluxo de entrada:**
- O arquivo `main.php` instancia o repositório de tarefas, os casos de uso (`CreateTask`, `ListTasks`) e executa a criação e listagem de tarefas.
- Não há interface CLI ou web, tudo é executado diretamente no script para facilitar o estudo do fluxo entre as camadas.

### 2. Busca de CEP (exemplo de inversão de dependência)
- Permite buscar informações de um CEP usando a API pública ViaCEP.
- O domínio define uma interface `CepClient`.
- Existem duas implementações concretas de client HTTP: uma usando cURL (`CurlCepClient`) e outra usando `file_get_contents` (`FileGetContentsCepClient`).
- O caso de uso `BuscarCep` recebe a implementação desejada via injeção de dependência.
- O resultado é exibido diretamente ao rodar o script.

**Fluxo de entrada:**
- O arquivo `main.php` instancia o client HTTP desejado e injeta no caso de uso `BuscarCep`.
- O CEP é buscado de forma programática (exemplo fixo: `01001000`).
- Para trocar a ferramenta HTTP, basta trocar a linha:
  ```php
  $cepClient = new CurlCepClient(); // ou new FileGetContentsCepClient();
  ```
- O domínio e o caso de uso não mudam, apenas a implementação concreta.

## Estrutura de Pastas
- `src/Domain/` — Entidades, Value Objects, Repositórios e regras de negócio
- `src/Application/` — Casos de uso (Use Cases) e DTOs
- `src/Infrastructure/` — Adaptadores (ex: repositório em memória, clients HTTP)
- `tests/` — Testes unitários e de integração
- `main.php` — Ponto de entrada para rodar exemplos

## Como rodar os exemplos
1. Instale as dependências:
   ```bash
   composer install
   ```
2. Execute o script principal:
   ```bash
   php main.php
   ```
   Você verá:
   - As tarefas criadas e listadas
   - O resultado da busca de CEP (usando a implementação HTTP escolhida)

## Como evoluir?
- Adicione novos domínios (ex: Usuário, Projeto)
- Implemente novos adaptadores (ex: HTTP, banco de dados, API externa)
- Troque facilmente as implementações concretas via injeção de dependência
- Siga os comentários nos arquivos para entender cada camada

## Referências
- [Clean Architecture - Uncle Bob](https://8thlight.com/blog/uncle-bob/2012/08/13/the-clean-architecture.html)
- [DDD - Domain Driven Design](https://martinfowler.com/bliki/DomainDrivenDesign.html)
- [Refactoring Guru - DDD](https://refactoring.guru/pt-br/design-patterns/ddd)

---

Siga os comentários nos arquivos para entender cada camada e como evoluir a estrutura.
