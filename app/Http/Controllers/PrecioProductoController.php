<?php

namespace App\Http\Controllers;

use App\Models\Precio_Producto;
use Illuminate\Http\Request;

class PrecioProductoController extends Controller
{
    function getPrecios(){
        return Precio_Producto::all();
      }
      function getPreciosById($id = null){
        return $id ? Precio_Producto::find($id) : Precio_Producto::all($id);
      }

      function getPreciosByIdProducto($productoId) {
        return  Precio_Producto::where("productoid",$productoId) ->get();
      }
 

}
