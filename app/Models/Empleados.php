<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;

    protected $table = 'empleados';

    protected $fillable = [
        'nombre',
        'tipo_documento',
        'num_documento',
        'correo',
        'num_telefonico',
        'direccion',
        'ciudad',
        'metodo_pago',
        'enti_bancaria',
        'tipo_cuenta',
        'num_cuenta',
        'hdv',
        'certificado_laboral',
        'cedula_doc',
        'certificados_estudios',
        'examen_medico',
        'libreta_militar',
        'antecedentes',
        'tipoContrato',
        'fechaInicio',
        'fechaFinalizacion',
        'sueldo',
        'sueldoIntegral',
        'numeroContrato',
        'cargo',
        'tipoCotizante',
        'fondoSalud',
        'fondoPensiones',
        'fondoCesantias',
        'cajaCompensacion',
        'ARL'




    ];
}
