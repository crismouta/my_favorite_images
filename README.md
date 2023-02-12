# Contexto del proyecto
Aplicación creada para gestión de imagenes en la cual el usuario puede guardar, editar, borrar y visualizar sus imagens favoritas. 

# Vistas
![home](https://user-images.githubusercontent.com/82060703/218305364-3f119c05-b269-4ca5-b0a4-bbe82685fb97.jpg)

![my_favorite_images](https://user-images.githubusercontent.com/82060703/218305310-5cfb0764-1681-4e86-9902-39bc76893a1a.png)


# Características generales

### Usuarios no registrados

-  En la aplicación los usuarios no registrados pueden registrarse.

### Usuarios registrados

-  Los usuarios registrados pueden añadir nuevas imagenes a su galeria.
-  Añadir título y description de la imagen.
-  Editar título y description de la imagen.
-  Cambair la imagen.
-  Borrar imagenes.

# Requisitos técnicos

-   Laravel 9
-   PHP 8
-   composer 1.10.15

# Instalación

**** info database

`clonar el repositorio: [https://github.com/ProjectComixSix/HangarRebelde.git](https://github.com/crismouta/my_favorite_images.git)`

`composer update`

`npm install && npm run dev`

`crear archivo .env con nombre de la base de datos`

`crear una base de datos en PhpMyAdmin con el mismo nombre usado en el .env`

`php artisan migrate:fresh --seed`

`php artisan storage:link`


## Running app

`php artisan serve`

## Running Tests

`php artisan test` o `vendor/bin/phpunit`

## Metodología de trabajo, arquitectura y técnicas

-   TDD
-   Tests
-   MVC

### Autora

-   Cris Mouta


## Herramientas y tecnologías utilizadas
- HTML5
- CSS
- Bootstrap
- Sass
- PHP8
- MySQL
- Visual Studio Code
- XAMPP
- Laravel
- Javascript
