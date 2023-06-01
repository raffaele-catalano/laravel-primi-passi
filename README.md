<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300"></a></p>

# First Steps
> `Repo` per iniziare a muovere i primi passi con questo fantastico *framework*, `Laravel`!

## Development 
- Creare un nuovo progetto `Laravel` utilizzando il comando:
```
composer create-project laravel/laravel:^9.2 laravel-primi-passi
```
- Al termine dell'installazione entrare nella cartella del progetto utilizzando il comando:
```
cd laravel-primi-passi
```
- Avviare *l'artisan serve* con uno dei due seguenti comandi:
```
php artisan serve
or
php -S localhost:8000 -t public
```
- A questo punto sistemare lo scaffolding e prendere confidenza con le *ruotes* e le *views*:
    - cancellare la *view* `welcome.blade.php` e creare una nuova *homepage*;
    - far si che la *route* `/` visualizzi `home.blade.php`;
    - inizialmente stampare un **Hello World**;
    - passare dei dati alla `view` in modo da visualizzarli dinamicamente con `Blade`.

## Bonus
Creare più di una pagina e visualizzare un `header` *menu* con i link di tutte le pagine, utilizzando la funzione `ruote()`.
