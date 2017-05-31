<?php

use Illuminate\Database\Seeder;
use App\Mean;

class MeansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Mean::class)->create(
        	[
        		'name' => 'Ambulancia'
        	]);

        factory(Mean::class)->create(
        	[
        		'name' => 'Gruas'
        	]);

        factory(Mean::class)->create(
        	[
        		'name' => 'Cama Baja'
        	]);

        factory(Mean::class)->create(
        	[
        		'name' => 'Carro Taller'
        	]);
    }
}
