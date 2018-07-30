<?php

use Illuminate\Database\Seeder;

class SimuladoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i < 6; $i++){
        	DB::table('simulado')->insert(['descricao_simulado'=> str_random(10)]);	
        }
    }
}
