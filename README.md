# MMartan

O projeto MMartan é uma pequena listagem de produtos.

# Principais Tecnologias

 - PHP 7.1
 - SQLite
 - Laravel 5.6
 - Javascript ES6
 - SASS
 - Vuejs 2
 - Webpack

# Requisitos para homologação

 - PHP 7.1 ou superior.

# Instalação para homologação

## 1. Clonar projeto do Github

No diretório executar o comando abaixo pra clonar o projeto:

```sh
$ git clone https://github.com/RodolfoOSimoes/mmartan.git
```

Após concluído, entrar no diretório do projeto:

```sh
$ cd mmartan
```

## 2. Baixar dependências do framework

Para baixar e atualizar as dependências do framework executar os comandos:

```sh
$ composer install

$ composer update
```

Ou caso não tenha composer na sua máquina, execute:

```sh
$ php composer install

$ php composer update
```

## 3. Criar banco de dados

Como o projeto utiliza SQLite, precisa apenas criar um arquivo vazio com extensão ``.sqlite`` em algum diretório. Pode-se usar o comando abaixo:

```sh
$ touch database.sqlite
```

O restante da configuração do banco está nos passos seguintes.

## 4. Configuração do framework

O framwork laravel utiliza um arquivo nomeado ``.env`` para configurar algumas ferramentas do projeto, como o banco de dados.

Primeiramente precisa-se copiar o arquivo ``.env.example`` e renome-lo para ``.env``. Pode-se usar o comando a abaixo:

```sh
$ cp .env.example .env
```

Para configurar o banco de dados SQLite do projeto, precisa copiar o **nome absoluto** do arquivo ``.sqlite`` e colar na propriedade ``DB_DATABASE=`` do arquivo ``.env``.

```sh
DB_DATABASE=[CAMINHO_ABSOLUTO_DO_BANCO_DE_DADOS]
```

## 5. Carregar banco de dados
Esse projeto prossuí uma ferramenta de migração que cria e carrega todo banco de dados e seus dados. Na linha de comando execute:

```sh
$ php artisan migrate --seed
```

## 6. Executar o servidor web

O Laravel possui um servidor para desenvolvimento. Execute o comando abaixo para executa-lo:

```sh
$ php artisan serve
```

## 6. Fim

Acesse o site pela url ``http://localhost:8000/``.

# Dev

Rodolfo Simões (simoes.rdf@gmail.com)