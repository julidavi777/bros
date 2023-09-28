<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleados>
 */
class EmpleadosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
        'tipo_documento' => $this->faker->randomElement(['DNI', 'Pasaporte']),
        'num_documento' => $this->faker->unique()->numberBetween(10000000, 99999999),
        'correo' => $this->faker->unique()->safeEmail,
        'num_telefonico' => $this->faker->phoneNumber,
        'direccion' => $this->faker->address,
        'ciudad' => $this->faker->city,
        'metodo_pago' => $this->faker->randomElement(['Tarjeta', 'Transferencia', 'Efectivo']),
        'enti_bancaria' => $this->faker->company,
        'tipo_cuenta' => $this->faker->randomElement(['Ahorros', 'Corriente']),
        'num_cuenta' => $this->faker->bankAccountNumber,
        'hdv' => $this->faker->imageUrl(), // Reemplaza con la generación de datos real para archivos
        'certificado_laboral' => $this->faker->imageUrl(), // Reemplaza con la generación de datos real para archivos
        'cedula_doc' => $this->faker->imageUrl(), // Reemplaza con la generación de datos real para archivos
        'certificados_estudios' => $this->faker->imageUrl(), // Reemplaza con la generación de datos real para archivos
        'examen_medico' => $this->faker->imageUrl(), // Reemplaza con la generación de datos real para archivos
        'libreta_militar' => $this->faker->imageUrl(), // Reemplaza con la generación de datos real para archivos
        'antecedentes' => $this->faker->imageUrl(), // Reemplaza con la generación de datos real para archivos
        'tipoContrato' => $this->faker->randomElement(['Contrato 1', 'Contrato 2']),
        'fechaInicio' => $this->faker->date(),
        'fechaFinalizacion' => $this->faker->date(),
        'sueldo' => $this->faker->randomFloat(2, 1000, 5000),
        'cargo' => $this->faker->jobTitle,
        'tipoCotizante' => $this->faker->randomElement(['Independiente', 'Contrato Laboral']),
        'fondoSalud' => $this->faker->company,
        'fondoPensiones' => $this->faker->company,
        'fondoCesantias' => $this->faker->company,
        'cajaCompensacion' => $this->faker->company,
        'ARL' => $this->faker->company,
        ];
    }
}
