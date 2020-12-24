Descargue el proyecto;
Abra una terminal de comando;
Dirijase a la ubicacion donde guardo el proyecto con el comando cd "carpeta raiz del proyecto";
Una vez alli ejecute el comando "php artisan serve";
Abra su navegador e inserte la direccion que le proporciona el cmd.
Dentro del navegador puede insertar las siguientes rutas definidas para obtener los datos: 
Aclaracion:en mi caso la ruta raiz por defecto es http://127.0.0.1:8000/ tenga en cuenta que esto puede llegar a variar en su equipo en cuyo caso simplemente reemplazelo con la ruta que le sea proporcionada:

<br>
<p align="center">Seccion Datos Cliente</p>
<br>

Se obtiene un arreglo con todos los datos de la tabla clientes:
<br>
http://127.0.0.1:8000/api/listaClientes 
<br><br>
Se obtiene un arreglo con los datos de la tabla clientes mediante una id proporcionada, en este caso 3:
<br>
http://127.0.0.1:8000/api/listaClientes/byId/3
<br><br>
Se obtiene un arreglo con los datos de la tabla clientes mediante el nombre del cliente proporcionado en este caso Consumidor:
<br>
http://127.0.0.1:8000/api/listaClientes/byName/Consumidor
<br><br>
Se obtiene un arreglo con los datos de la tabla clientes mediante el apellido del cliente proporcionado en este caso Final:
<br>
http://127.0.0.1:8000/api/listaClientes/byLastName/Final
<br>
<br>
<p align="center">Seccion Datos Precios Productos</p>
<br>
Se obtiene un arreglo con todos los datos de la tabla precio_producto:
<br>
http://127.0.0.1:8000/api/listaPrecios
<br><br>
Se obtiene un arreglo con los datos de la tabla precio_producto mediante una id proporcionada, en este caso 1:
<br>
http://127.0.0.1:8000/api/listaPrecios/byId/1
<br><br>
Se obtiene un arreglo con los datos de la tabla precio_producto mediante el id de un producto proporcionado, en este caso 5:
<br>
http://127.0.0.1:8000/api/listaPrecios/byProductoId/5
<br><br>
<p align="center">Seccion Datos Productos</p>
<br>
Se obtiene un arreglo con todos los datos de la tabla productos:
<br>
http://127.0.0.1:8000/api/listaProductos
<br><br>
Se obtiene un arreglo con los datos de la tabla productos mediante una id proporcionada, en este caso 1:
<br>
http://127.0.0.1:8000/api/listaProductos/byId/1
<br><br>
Se obtiene un arreglo con los datos de la tabla productos mediante el nombre del producto proporcionado en este caso Torta
<br>
http://127.0.0.1:8000/api/listaProductos/byName/Torta
<br><br>
Por el momento estas son las solicitudes con las que se va a trabajar en la pgina web del comercio Panaderia, en un futuro podrian agregarse mas si la situación lo amerita.


<br>
<br>
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# ApiRestPanaderia
# ApiRestPanaderia
