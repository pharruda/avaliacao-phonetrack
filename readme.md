## Instalação ambiente linux

Segue a instruções para instalação em ambiente linux

1. baixe o projeto
2. Acesse a pasta raiz
    ```sh
    cd avaliacao-phonetrack
    ```
3. instale as depedências via composer
     ```sh
     composer install
     ```
 4. Configure acesso ao BD, no arquivo `config/database.php`
     ```php
        'mysql' => [
                   'driver' => 'mysql',
                   'host' => env('DB_HOST', '127.0.0.1'),
                   'port' => env('DB_PORT', '3306'),
                   'database' => env('DB_DATABASE', ''),
                   'username' => env('DB_USERNAME', 'root'),
                   'password' => env('DB_PASSWORD', ''),
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
 
 #Executar App
 1. Acesse a pasta raiz do projeto e execute o comando
    ```sh
    php artisan serve
    ```