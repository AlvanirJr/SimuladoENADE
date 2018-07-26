<?php

use Illuminate\Database\Seeder;

class QuestaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	public function run()
    {
    	for($i = 1; $i < 4; $i++){
    		DB::table('questaos')->insert(['enuciado' => str_random(10), 'alternativa_a' => str_random(10), 'alternativa_b' => str_random(10), 'alternativa_c' => str_random(10),  'alternativa_d' => str_random(10),  'alternativa_e' => str_random(10), 'alternativa_correta' => str_random(10),'dificuldade' => $i, 'disciplina_id' => $i]);
    	}
    }
}
