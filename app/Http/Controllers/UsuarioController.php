<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function procesarNombre(Request $request){
        $data = $request->all();
        $nombre = $data["nombre"];
        $apellido = $data["apellido"];
        $dni = $data["dni"];

        $usuario = new Usuario($nombre,$apellido,$dni);

        $nombreCompleto = $usuario->obtenerNombreCompleto();

        return response()->json([
            "status" => "Success",
            "nombreCompleto" => $nombreCompleto,
            "code" => 200,
        ],200);
    }

    public function obtenerUsuario(){
        Echo "hola";
    }

    
    public function p(){
        Echo "hola";
    }
}
