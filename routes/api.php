<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PrecioController;
use App\Http\Controllers\PrecioProductoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Seccion Clientes

//listaClientes(direccion http) ej: http://127.0.0.1:8000/api/listaClientes
//getClientes nombre del metodo
Route::get("listaClientes", [ClienteController::class,'getClientes']);
//{id}valor que tomara como parametro
Route::get("listaClientes/byId/{id}", [ClienteController::class,'getClientesById']);
Route::get("listaClientes/byName/{nombre}", [ClienteController::class,'getClientesByName']);
Route::get("listaClientes/byLastName/{lastName}", [ClienteController::class,'getClientesByLastName']);

//Seccion Precios
Route::get("listaPrecios", [PrecioProductoController::class,'getPrecios']);
Route::get("listaPrecios/byId/{id}", [PrecioProductoController::class,'getPreciosById']);
Route::get("listaPrecios/byProductoId/{productoId}", [PrecioProductoController::class,'getPreciosByIdProducto']);

//seccion Productos

Route::get("listaProductos", [ProductoController::class,'getProductos']);
Route::get("listaProductos/byId/{id}", [ProductoController::class,'getProductosById']);
Route::get("listaProductos/byName/{nombre}", [ProductoController::class,'getProductosByName']);