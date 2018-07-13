<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i = 1; $i < 4; $i++){
    		DB::table('usuarios')->insert(['nome' => str_random(10), 'cpf' => str_random(10), 'senha' => str_random(10), 'email' => str_random(10), 'tipo_usuario_id' => $i, 'curso_id' => $i]);
    	}

    }
}
