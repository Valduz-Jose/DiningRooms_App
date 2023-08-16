<?php

namespace Database\Seeders;

use App\Models\Comedore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comedore::factory(50)->create();
    }
}
