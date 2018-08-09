## Instalação ambiente linux

Segue as instruções para instalação em ambiente linux

1. Baixe ou clone o projeto [https://github.com/pharruda/avaliacao-phonetrack]
2. Acesse a pasta raiz
    ```sh
    cd avaliacao-phonetrack
    ```
3. Instale as depedências via composer
     ```sh
     composer install
     ```
 4. Configure o acesso ao Banco dedaos, no arquivo `config/database.php`
     ```php
        'mysql' => [
                   'driver' => 'mysql',
                   'host' => env('DB_HOST', '127.0.0.1'),
                   'port' => env('DB_PORT', '3306'),
                   'database' => '', // adicionar database
                   'username' => '', // adicionas username
                   'password' => '', // adicionar password
                   'unix_socket' => env('DB_SOCKET', ''),
                   'charset' => 'utf8mb4',
                   'collation' => 'utf8mb4_unicode_ci',
                   'prefix' => '',
                   'strict' => true,
                   'engine' => null,
        ],
     ```
 5. Execute os comandos abaixo para criar as tabelas e adicionar as cidades e os estados.
     ```sh
     php artisan migrate
     php artisan db:seed
     ```
 6. Pronto
 
 ## Executar Projeto
 1. Acesse a pasta raiz do projeto e execute o comando
    ```sh
    php artisan serve
    ```