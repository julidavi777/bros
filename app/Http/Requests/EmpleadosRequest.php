<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string',
            'tipo_documento' => 'required|string',
            'num_documento' => 'required|string',
            'correo' => 'required|email',
            'num_telefonico' => 'required|string',
            'direccion' => 'required|string',
            'ciudad' => 'required|string',
            'metodo_pago' => 'required|string',
            'enti_bancaria' => 'required|string',
            'tipo_cuenta' => 'required|string',
            'num_cuenta' => 'required|string',
            'hdv' => 'mimes:doc,docx,jpg,png,pdf',
            'certificado_laboral' => 'mimes:doc,docx,jpg,png,pdf',
            'cedula_doc' => 'mimes:doc,docx,jpg,png,pdf',
            'certificados_estudios' => 'mimes:doc,docx,jpg,png,pdf',
            'examen_medico' => 'mimes:doc,docx,jpg,png,pdf',
            'libreta_militar' => 'mimes:doc,docx,jpg,png,pdf',
            'antecedentes' => 'mimes:doc,docx,jpg,png,pdf',
            'tipoContrato' => 'required|string',
            'fechaInicio' => 'required|date',
            'fechaFinalizacion' => 'required|date',
            'sueldo' => 'required|string',
            'cargo' => 'required|string',
            'tipoCotizante' => 'required|string',
            'fondoSalud' => 'required|string',
            'fondoPensiones' => 'required|string',
            'fondoCesantias' => 'required|string',
            'cajaCompensacion' => 'required|string',
            'ARL' => 'required|string',
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            // Mensajes de error personalizados para cada regla de validación
            'nombre.required' => 'El campo Nombre es obligatorio.',
            'tipo_documento.required' => 'El campo Tipo de Documento es obligatorio.',
            'num_documento.required' => 'El campo Número de Documento es obligatorio.',
            'correo.required' => 'El campo Correo es obligatorio.',
            'correo.email' => 'El campo Correo debe ser una dirección de correo válida.',
            'num_telefonico.required' => 'El campo Número Telefónico es obligatorio.',
            'direccion.required' => 'El campo Dirección es obligatorio.',
            'ciudad.required' => 'El campo Ciudad es obligatorio.',
            'metodo_pago.required' => 'El campo Método de Pago es obligatorio.',
            'enti_bancaria.required' => 'El campo Entidad Bancaria es obligatorio.',
            'tipo_cuenta.required' => 'El campo Tipo de Cuenta es obligatorio.',
            'num_cuenta.required' => 'El campo Número de Cuenta es obligatorio.',
            'hdv.mimes' => 'El archivo de Hoja de Vida debe tener un formato válido (doc, docx, jpg, png o pdf).',
            // Agrega más mensajes de error según tus necesidades

            // Mensajes de error para campos del contrato
            'tipoContrato.required' => 'El campo Tipo de Contrato es obligatorio.',
            'fechaInicio.required' => 'El campo Fecha de Inicio es obligatorio.',
            'fechaFinalizacion.required' => 'El campo Fecha de Finalización es obligatorio.',
            'fechaInicio.date' => 'El campo Fecha de Inicio debe ser una fecha válida.',
            'fechaFinalizacion.date' => 'El campo Fecha de Finalización debe ser una fecha válida.',
            'sueldo.required' => 'El campo Sueldo es obligatorio.',
            'cargo.required' => 'El campo Cargo es obligatorio.',
            'tipoCotizante.required' => 'El campo Tipo de Cotizante es obligatorio.',
            'fondoSalud.required' => 'El campo Fondo de Salud es obligatorio.',
            'fondoPensiones.required' => 'El campo Fondo de Pensiones es obligatorio.',
            'fondoCesantias.required' => 'El campo Fondo de Cesantías es obligatorio.',
            'cajaCompensacion.required' => 'El campo Caja de Compensación es obligatorio.',
            'ARL.required' => 'El campo ARL es obligatorio.',
            // Agrega más mensajes de error para campos del contrato

        ];
    }
}
