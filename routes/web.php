<?php

use App\Http\Controllers\AdministracionController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfertasController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\DepartamentoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignarPermisosController;
use App\Http\Controllers\RoleController;
use Illuminate\Routing\Router;



Route::get('/', function () {
    return redirect('/login');
});

Route::get('/panel-administrativo', [HomeController::class, 'index'])->name('inicio');
Route::resource('administracion', AdministracionController::class);
Route::resource('roles', RoleController::class);
// Route::resource('clientes', ClientesController::class);
Route::resource('ofertas', OfertasController::class);
Route::resource('usuarios', UsuariosController::class);
Route::resource('empleados', EmpleadosController::class);


// CRUD EMPLEADOS

// Route::post('/empleados/store', [EmpleadosController::class, 'store'])->name('empleados.store');
// Route::get('/empleados/show/{id}', [EmpleadosController::class, 'show'])->name('empleados.show');


// Rutas clientes
Route::get('/clientes/departamentos-y-municipios', [ClientesController::class, 'showAllDepartmentsAndMunicipios'])->name('clientes.departamentos-y-municipios');

// Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');

// rutas para imprmir departamentos y municipios en el form clientes
Route::get('/departamentos', [DepartamentoController::class, 'index']); 
Route::get('/municipios', [MunicipioController::class, 'index'])->name('cliente.municipio');

Route::get('/get-municipios/{departamento}', [MunicipioController::class, 'getMunicipios']);



Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
// Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Asignar permisos
Route::get('/asignar-permisos', [AsignarPermisosController::class, 'showForm']);
Route::get('/mostrar-roles', [AsignarPermisosController::class, 'index']);
Route::post('/asignar-permisos', [AsignarPermisosController::class, 'asignarPermisos'])->name('asignar_permisos');
