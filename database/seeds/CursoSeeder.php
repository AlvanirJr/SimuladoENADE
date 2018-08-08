<?php

use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 6; $i++){
        	DB::table('cursos')->insert(['ciclo_id'=> 1, 'curso_nome'=> str_random(10), 'unidade_id' => 1]);
        }
    }
}
