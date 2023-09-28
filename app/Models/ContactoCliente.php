<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactosClientes extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'contactos_clientes';

    // Definición de las propiedades del modelo
    protected $fillable = [
        'cliente_id',
        'nombre',
        'celular',
        'telefono',
        'ext',
        'correo_electronico',
        'departamento',
        'municipio',
        // Otras columnas de contacto si es necesario
    ];

    // Relación con el modelo Clientes
    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }

    // Relación con el modelo Departamento
    public function departamentoRelacion()
    {
        return $this->belongsTo(Departamento::class, 'departamento');
    }

    // Relación con el modelo Municipio
    public function municipioRelacion()
    {
        return $this->belongsTo(Municipio::class, 'municipio');
    }
}
