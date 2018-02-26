<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Segue instruções para testes:

Para realizar os teste devem ser consideradas algumas etapas:

Etapa 1 :
Após clonar o projeto devera rodar os seguintes comandos:
```sh
composer install
```
Etapa 2:
Será preciso configurar o banco de dados que fica em um arquivo chamado env-example

```sh
Vá na raiz do projeto e renomeie o arquivo env-example para .env
```
Feito isso configure a conexão do seu banco de dados na variáveis: 
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=juridico-certo
DB_USERNAME=root
DB_PASSWORD=root
```
Etapa 3:

Rode o comando:
```sh
php artisan key:generate
```
Etapa 4:

Vale lembrar que todo o Schedule do banco assim como os dados iniciais para login estão criado na aplicação na pasta database/migrations e database/seeds, mas não se preocupe para criar as tabelas basta rodar o seguinte comando:
```sh
php artisan migrate:refresh --seed
```
Etapa 5 :
Rode o seguinte comando para instalar as dependencias js,css pois o projeto está usando webpack para gerenciar os (css,js).
```sh
npm install
```
para testar a implementação do Webpack gerenciando o (sass, js) rode:
```sh
npm run watch
```

## Observação 

Para logar na aplicão foram criados dados iniciais basta digitar:

Login:
```sh
admin@comercenergia.com
```
Senha:
```sh
admin123
```
Mas caso queira criar um novo usuário fique à vontade o link para registro fica no login ;)

Caso queira usar o servidor do laravel para visualizar a aplicação rode:
```sh
php artisan serve
```
Ele irá levantar um servidor virtual.
