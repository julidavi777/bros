<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos'; // Nombre de la tabla en la base de datos

    // Definir relaciones con otros modelos, si es necesario
    public function municipios()
    {
        return $this->hasMany(Municipio::class);
    }

    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }
}


