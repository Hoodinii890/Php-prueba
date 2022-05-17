<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class veterinariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=[
            [
                'Nombre'=>'Lina Cuartas',
                'Telefono'=>rand(1000000000, 9999999999)
            ],
            [
                'Nombre'=>'Kristina Muñoz',
                'Telefono'=>rand(1000000000, 9999999999)
            ],
            [
                'Nombre'=>'Steven Gómez',
                'Telefono'=>rand(1000000000, 9999999999)
            ],
        ];
        DB::table('medicos')->insert($datos);
    }
}
