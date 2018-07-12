<?php

use Illuminate\Database\Seeder;

class CicloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for($i = 0; $i < 5; $i++){
        	DB::table('ciclos')->insert(['tipo_ciclo'=> str_random(10)]);	
        }
    }
}
