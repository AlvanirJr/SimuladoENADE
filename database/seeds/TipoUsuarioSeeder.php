<?php

use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('tipo_usuarios')->insert(['tipo' => 'Aluno']);
    	DB::table('tipo_usuarios')->insert(['tipo' => 'Coordenador']);
    	DB::table('tipo_usuarios')->insert(['tipo' => 'Professor']);
        DB::table('tipo_usuarios')->insert(['tipo' => 'Admistrador']);
        //
    }
}
