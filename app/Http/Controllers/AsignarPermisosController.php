<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class AsignarPermisosController extends Controller
{

    public function index(){
        $role = Role::all();
        return response()->json($role);
    }


    public function showForm()
    {
        $permisos = Permission::all();
        return view('roles.asignar_permisos', compact('permisos'));
    }

    public function asignarPermisos(Request $request)
    {
        $request->validate([
            'nombre_rol' => 'required',
            'permisos' => 'required|array',
        ]);

        $role = Role::create(['name' => $request->input('nombre_rol')]);
        $role->givePermissionTo($request->input('permisos'));

        return redirect()->back()->with('success', 'Permisos asignados correctamente.');
    }
}
