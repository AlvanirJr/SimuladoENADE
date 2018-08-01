<?php

use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 4; $i++){
    		DB::table('alunos')->insert(['nome' => str_random(10), 'cpf' => str_random(10), 'senha' => str_random(10), 'email' => , 'curso_id' => $i]);
    	}
    }
}
