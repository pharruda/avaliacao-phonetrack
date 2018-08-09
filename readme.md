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
 4. Configure o acesso ao BD, renomei o arquivo `.env.example` para `.env`
 
 5. Modifique os valores de `DB_DATABASE` `DB_USERNAME` `DB_PASSWORD` para os valores da sua conexão

 6. Execute os comandos abaixo para criar as tabelas e adicionar as cidades e os estados.
     ```sh
     php artisan migrate
     php artisan db:seed
     ```
 7. Execute o comando 
    ```sh
      php artisan key:generate
      ```
 8.Pronto
 
 ## Executar Projeto
 1. Acesse a pasta raiz do projeto e execute o comando
    ```sh
    php artisan serve
    ```