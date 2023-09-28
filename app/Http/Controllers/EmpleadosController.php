<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpleadosRequest;

use App\Models\Empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $empleados= Empleados::get();
        return view('empleados.index', compact('empleados'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function store(EmpleadosRequest $request)
    {
        // Validación de los datos del formulario
        $validatedData = $request->validate([
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
        ]);

        // Crear un nuevo objeto Empleado con los datos validados
        $empleado = new Empleados($validatedData);

        // Subir y guardar archivos adjuntos si se proporcionan
        $documentos = ['hdv', 'certificado_laboral', 'cedula_doc', 'certificados_estudios', 'examen_medico', 'libreta_militar', 'antecedentes'];

        foreach ($documentos as $documento) {
            if ($request->file($documento)) {
                $path = $request->file($documento)->store('documentos');
                $empleado->$documento = $path;
            }
        }

        // Guardar el objeto en la base de datos
        $empleado->save();

        // Redireccionar o retornar una respuesta según tus necesidades
        return redirect()->route('empleados.index')->with('success', 'Empleado creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $empleado = Empleados::find($id);

        return view('empleados.ver', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $empleado = Empleados::find($id);

        // return view('empleados.ver', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
