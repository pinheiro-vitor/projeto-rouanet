# Projeto Rouanet

## Descrição
O Projeto é um teste em um processo seletivo para uma vaga na empresa SIMBI.

## Objetivo
- Documentar via swagger e desenvolver uma API em PHP utilizando o framework Laravel com o dataset que estou mandando em anexo (SCRIPT MYSQL), uma rota de consumo que retorna os dados em formato JSON.
- Desenvolver uma aplicação em ReactJS que consuma a API desenvolvida anteriormente e liste os cards lado a lado conforme o design da imagem.

## Tecnologias Utilizadas

### Backend
- **Laravel**: Framework PHP utilizado para construir a API que gerencia os projetos culturais.

### Frontend
- **React**: Biblioteca JavaScript para construir interfaces de usuário.
- **Chakra UI**: Biblioteca de componentes para estilizar o aplicativo.
- **Swiper**: Biblioteca para criar carrosséis e sliders responsivos.

## Funcionalidades
- Listagem de projetos culturais aprovados e captados.
- Exibição de detalhes dos projetos, incluindo nome, município, estado, resumo e valores aprovados e captados.
- Interface amigável e responsiva.

## Pré-requisitos
Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
- [Node.js](https://nodejs.org/en/)
- [Yarn](https://yarnpkg.com/) ou [npm](https://www.npmjs.com/)
- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)

## Instalação

### Backend (Laravel)
1. Clone este repositório:
    ```bash
    git clone https://github.com/seu-usuario/projeto-rouanet.git
    ```

2. Acesse a pasta do projeto:
    ```bash
    cd projeto-rouanet/backend
    ```

3. Instale as dependências do Laravel:
    ```bash
    composer install
    ```

4. Configure o arquivo `.env` com as informações do seu banco de dados. Você pode usar o arquivo `.env.example` como exemplo:
    ```bash
    cp .env.example .env
    ```

5. Gere a chave da aplicação:
    ```bash
    php artisan key:generate
    ```

6. Execute as migrações para criar as tabelas no banco de dados:
    ```bash
    php artisan migrate
    ```

7. Popule o banco de dados com dados fictícios (se aplicável):
    ```bash
    php artisan db:seed
    ```

8. Inicie o servidor do Laravel:
    ```bash
    php artisan serve
    ```

### Frontend (React)
1. Acesse a pasta do frontend:
    ```bash
    cd ../frontend
    ```

2. Instale as dependências:
    ```bash
    yarn install
    ```
    ou
    ```bash
    npm install
    ```

3. Inicie a aplicação React:
    ```bash
    yarn start
    ```
    ou
    ```bash
    npm start
    ```

## Uso
Após seguir os passos de instalação, acesse `http://localhost:3000` no seu navegador para visualizar a aplicação frontend. O backend estará disponível em `http://localhost:8000`.
