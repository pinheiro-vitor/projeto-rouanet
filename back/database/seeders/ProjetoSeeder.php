<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Projeto;



class ProjetoSeeder extends Seeder
{
    public function run()
    {
        Projeto::factory()->count(10)->create();
    }
}