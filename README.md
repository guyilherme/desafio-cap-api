# Desafio Capgemini

A API foi construida utilizando a versão 7 do framework Laravel.
 
## Execução do projeto

O projeto foi feito utilizando banco de dados SQLite conforme solicitado. O mesmo já se encontra nos arquivos do projeto pra facilitar a configuração. Para executar a API basta rodar o comando abaixo:

```sh
$ composer install
$ php -S localhost:8000 -t public
```

Você pode utilizar o comando do próprio Laravel, mas ai é preciso mudar o endereço no front.

## Arquitetura
Foi utilizada a arquitetura REST nessa API. Eu tive um pequeno problema com o CORS porque nessa versão aparentemente eles já implementaram algo por padrão pra liberar o CORS.