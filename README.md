# Landing Page Simples

Este é um projeto de uma landing page simples com um sistema de inscrição e gerenciamento de inscritos. O projeto foi desenvolvido utilizando Tailwind CSS, Alpine.js, Laravel e Livewire. Para o ambiente de desenvolvimento, foram utilizados Laravel Sail e Mailpit.

## Tecnologias Utilizadas

- **Tailwind CSS**: Para estilização da página.
- **Alpine.js**: Para manipulação de estados e interações no front-end.
- **Laravel**: Framework PHP utilizado para o desenvolvimento do back-end.
- **Livewire**: Para componentes interativos sem sair do Laravel.
- **Laravel Sail**: Ambiente de desenvolvimento em Docker.
- **Mailpit**: Para teste de envio de emails durante o desenvolvimento.

## Funcionalidades

- **Inscrição por Email**: Usuários podem se inscrever na landing page utilizando seu email.
- **Gerenciamento de Inscritos**: Interface administrativa para listar, pesquisar e deletar inscritos.

## Instalação

### Pré-requisitos

- Docker e Docker Compose instalados na sua máquina.

### Passos

1. Clone o repositório:

    ```bash
    git clone https://github.com/seu-usuario/nome-do-repositorio.git
    cd nome-do-repositorio
    ```

2. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente conforme necessário:

    ```bash
    cp .env.example .env
    ```

3. Suba os containers do Laravel Sail:

    ```bash
    ./vendor/bin/sail up -d
    ```

4. Instale as dependências do projeto:

    ```bash
    ./vendor/bin/sail composer install
    ```

5. Gere a chave da aplicação:

    ```bash
    ./vendor/bin/sail artisan key:generate
    ```

6. Execute as migrações do banco de dados:

    ```bash
    ./vendor/bin/sail artisan migrate
    ```

7. Inicie o Mailpit:

    ```bash
    ./vendor/bin/sail up mailpit
    ```

### Desenvolvimento

O aplicativo estará disponível em [http://localhost](http://localhost).

Para acessar o Mailpit e visualizar os emails de teste:

[http://localhost:8025](http://localhost:8025)

## Uso

### Inscrição

1. Visite a landing page.
2. Insira seu email no campo de inscrição e envie o formulário.
3. Você receberá um email de confirmação (configurado com Mailpit no ambiente de desenvolvimento).

### Gerenciamento de Inscritos

1. Acesse a interface administrativa.
2. Você poderá listar todos os inscritos, pesquisar por email e deletar inscrições.
