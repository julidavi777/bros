<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name_municipio = $request->query('name_municipio');

        if (!is_null($name_municipio)) {

            $municipios = Municipio::whereRaw("lower(unaccent(name)) ilike '%$name_municipio%'")
                ->orderBy('name')
                ->limit(10)
                ->get();

            return $this->showAll($municipios);
        }

        $municipios = Municipio::get();
        return $this->showAll($municipios);
    }

    public function getMunicipiosByDepartamento($departamento_id)
    {
        $municipios = Municipio::where('departamento_id', $departamento_id)->get();
        return response()->json($municipios);
    }

    public function getMunicipios($departamentoId)
    {
        $municipios = Municipio::where('departamento_id', $departamentoId)->get();

        return response()->json($municipios);
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Municipio $municipio)
    {
        //
    }
}
