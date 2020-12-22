<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
  //  function getData(Request $request){
  //       return ["name"=>"Franco"];
  //   }

  function getClientes(){
    return Cliente::all();
  }
  function getClientesById($id = null){
    return $id ? Cliente::find($id) : Cliente::all($id);
  }

  function getClientesByName($name) {
    return  Cliente::where("nombre",$name) ->get();
  }
  
  function getClientesByLastName($lastNaeme) {
    return  Cliente::where("apellido",$lastNaeme) ->get();
  }

}
