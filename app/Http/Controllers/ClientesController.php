<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

use App\Models\Clientes;
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\ClientesContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes= Clientes::get();
        $department = Departamento::all(); 
        $city = Municipio::all();
        return view('clientes.index', compact('clientes', 'department', 'city'));

    }

    public function create()
    {

    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $cliente)
    {

    }



    public function showAllDepartmentsAndMunicipios()
    {
        // Obtén los departamentos y municipios aquí y colócalos en un array o colección.
        $departamentos = Departamento::all();
        $municipios = Municipio::all();

        // Retorna los departamentos y municipios como un arreglo JSON.
        return response()->json([
            'departamentos' => $departamentos,
            'municipios' => $municipios,
        ]);
    }



}
