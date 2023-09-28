<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'clientes';

    // Definición de las propiedades del modelo
    protected $fillable = [
        'identification_type',
        'identification',
        'digit_v',
        'name',
        'surname',
        'razon_social',
        'razon_comercial',
        'phone_number',
        'departamentos_id',
        'municipios_id',
        'address',
        'email',
        'rut_file',
        'camara_commerce_file',
        'income_statement_file',
        'logo_file',
    ];

    // Relación con la tabla departamentos
    public function departamento()
    {
        return $this->belongsTo('App\Models\Departamento', 'departamentos_id');
    }

    // Relación con la tabla municipios
    public function municipio()
    {
        return $this->belongsTo('App\Models\Municipio', 'municipios_id');
    }
}

