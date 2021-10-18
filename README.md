<p align="center"><a href="https://angelauribe.github.io/apalabrados/" target="_blank"><img src="https://github.com/AngelaUribe/apalabrados/blob/master/public/images/banner.png?raw=true" width="450"></a></p>

## Instrucciones

Bienvenido a Apalabrados:

Esta aplicación analizará el dato que ingreses luego de hacer clic en el botón GO! y la clasificará de acuerdo a las siguientes tablas:

- Números: Guardará el número registrado y mostrará el valor acumulado de los anteriores números registrados.
- Texto: Registrará la cadena de caracteres que ingreses.
- Caracteres: Si escribes algún caractere especial, éste será clasificado en la columna caracter, el texto adicional será descartado.

- **[Aplicación](http://apalabrados.appincdevs.com/public/)**

## Indicaciones para descargar el repositorio
Una vez clonado el repositorio en Laravel local, debes ejecutar los siguientes pasos:

### Instalar dependencias
Abrir una terminal en la carpeta del proyecto y ejecutar
composer install

Instalar las dependencias de NPM definidas en el archivo package.json usando:
npm install

### Actualizar el archivo .env
configurar la conexión de la bd ejemplo:

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=laravel_project
DB_USERNAME=root
DB_PASSWORD=secret

### Generar una clave
La clave de aplicación es una cadena aleatoria almacenada en la clave APP_KEY dentro del archivo .env. Notarás que también falta.
Para crear la nueva clave e insertarla automáticamente en el .env, ejecutaremos:
php artisan key:generate

### Migrar 

Por último, ejecutar las migraciones para que se generen las tablas con:
php artisan migrate 


### Diagrama de Flujo

<p align="center"><a href="https://angelauribe.github.io/apalabrados/" target="_blank"><img src="https://github.com/AngelaUribe/apalabrados/blob/master/public/images/diagrama.jpg" width="500"></a></p>


