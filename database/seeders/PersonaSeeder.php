<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PersonaSeeder extends Seeder
{
    public function run()
    {
        DB::table('persona')->insert([
            [
                'cPerApellido' => 'Urquizo Gómez',
                'cPerNombre' => 'Yosip',
                'cPerDireccion' => 'Av. Los Ficus 123',
                'dPerFecNac' => '1985-05-15',
                'nPerEdad' => 38,
                'nPerSueldo' => 3500.50,
                'cPerRnd' => 'RND-001',
                'nPerEstado' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cPerApellido' => 'Pérez Rojas',
                'cPerNombre' => 'Ana Sofía',
                'cPerDireccion' => 'Calle Las Magnolias 456',
                'dPerFecNac' => '1992-08-22',
                'nPerEdad' => 31,
                'nPerSueldo' => 2800.00,
                'cPerRnd' => 'RND-002',
                'nPerEstado' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cPerApellido' => 'Mendoza Silva',
                'cPerNombre' => 'Carlos',
                'cPerDireccion' => 'Jr. Los Pinos 789',
                'dPerFecNac' => '1995-11-10',
                'nPerEdad' => 28,
                'nPerSueldo' => 2100.75,
                'cPerRnd' => 'RND-003',
                'nPerEstado' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cPerApellido' => 'López Castro',
                'cPerNombre' => 'María Elena',
                'cPerDireccion' => 'Av. El Sol 321',
                'dPerFecNac' => '1988-03-30',
                'nPerEdad' => 36,
                'nPerSueldo' => 4200.00,
                'cPerRnd' => 'RND-004',
                'nPerEstado' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'cPerApellido' => 'Ruiz Díaz',
                'cPerNombre' => 'Jorge',
                'cPerDireccion' => 'Urb. La Esperanza Mz D',
                'dPerFecNac' => '1998-01-05',
                'nPerEdad' => 26,
                'nPerSueldo' => 1500.00,
                'cPerRnd' => 'RND-005',
                'nPerEstado' => '0', // Cambiamos el estado a 0 como variación
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}