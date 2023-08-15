<?php

namespace Database\Seeders;

use App\Models\Vivere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VivereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vivere = new Vivere;
        $vivere->name = 'Carne';
        $vivere->cantidad = 15;
        $vivere->unidad_medida = 'Kilos';
        $vivere->ubicacion = 'bramon';
        $vivere->save();
    }
}
