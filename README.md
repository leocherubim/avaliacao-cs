# avaliacao-cs
Este projeto é referente a avaliação final da matéria de Tecnologia Cliente/Servidor do curso de Desenvolvimento de Sistemas para Internet, IFMT - Campus Cuiabá.

## Autores
- Leonardo Fernandes Cherubini
- Eduardo Philip
- Wagner

O presente trabalho consiste em uma API básica para as tabelas artists, albums e musics. São dispostos para o usuário um CRUD para cada tabela a partir dos resposctivos métodos HTTP GET, POST, PUT e DELETE.

O projeto foi desenvolvido pelo framework PHP Laravel 5.1 e seu framework nativo de persistencia Eloquent.

## Funcionamento da Aplicação

Para a aplicação rodar localmente é necessário ter a variável ambiante do php configurada. Após o projeto ser baixado é necessário entrar na pasta raiz do mesmo e execultar o comando:
``````````````````
php artisan serve
``````````````````
Deste modo o projeto estará sendo execultado em localhost na porta 8000.

O serviço REST FULL já está disponível no link:
[creepy-phantom-5279.herokuapp.com](creepy-phantom-5279.herokuapp.com)

# Trabalhando com as APIs
As APIs estão disponíveis nas URLs

/artist

/algum

/music

Exemplo:
[creepy-phantom-5279.herokuapp.com/artist](creepy-phantom-5279.herokuapp.com/artist) ou
[localhost:8000/artist](localhost:8000/artist)

## Estrutura do Projeto Laravel

No arquivo **app/HTTP/routes.php** estão as rotas disponíveis e a configuração dos métodos HTTP.

Em **app/Entities** estão os modelos e em **app/HTTP/Controllers** estão os controllers e as actions.

No diretório **app/Repositories** estão os repositories e suas interfaces referentes para cada modelo.

E nos diretórios **app/Transformers** e **app/Presenters** estão as configuração para customizar a serialização das APIs

## Funcionamento das APIs
Segue abaixo os campos necessãrios para o consulmo de cada API:

- Artist:
'name','home_country','biography';
- Album:
'title','genre','release_date','price','artist_id';
- Music:
'title','duration','composer','letter','album_id';
