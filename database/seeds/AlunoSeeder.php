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
        for($i = 1; $i < 5; $i++){
    		DB::table('alunos')->insert(['nome' => str_random(10), 'cpf' => str_random(10), 'password' => \Hash::make('123456'), 'email' =>  str_random(5).'@'.str_random(5).'.com', 'curso_id' => $i]);
    	}
    }
}
