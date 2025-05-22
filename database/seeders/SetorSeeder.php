<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('setores')->insert([
            [
                'nome' => 'T.I'
            ],
            [
                'nome' => 'R.H'
            ],
            [
                'nome' => 'Logistica'
            ],
            [
                'nome' => 'Financeiro'
            ]
        ]);
    }
}
