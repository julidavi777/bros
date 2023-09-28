<?php

namespace Database\Seeders;

use App\Models\Empleados;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadosSeeder extends Seeder
{

    public function run(): void
    {
        Empleados::factory()->count(count:20)->create();
    }
}
