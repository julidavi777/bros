<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrativo = Role::create(['name' => 'administrativo']);
        $asesor = Role::create(['name' => 'asesor']);
        $entregador = Role::create(['name' => 'entregador']);
        $gerente = Role::create(['name' => 'gerente']);
    
    }
}
