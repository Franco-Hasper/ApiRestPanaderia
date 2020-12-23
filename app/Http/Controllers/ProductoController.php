<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    function getProductos(){
        return Producto::all();
      }
      function getProductosById($id = null){
        return $id ? Producto::find($id) : Producto::all($id);
      }

      function getProductosByName($name) {
        return  Producto::where("nombre",$name) ->get();
      }
}
