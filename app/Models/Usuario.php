<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $nombre;
    protected $apellido;
    protected $dni;

    public function __construct($nombre,$apellido,$dni){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->dni=$dni;
    }
    
    public function obtenerNombreCompleto(){
        $resultado = 'Me llamo ' . $this->nombre . ' ' . $this->apellido . ' y mi dni es ' . $this->dni;
        return $resultado;
    }
}



