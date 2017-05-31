<?php

use Illuminate\Database\Seeder;
use App\Position;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Position::class)->create(
        	[
        		'name'=> 'Gerente'
        	]);

        factory(Position::class)->create(
        	[
        		'name'=> 'Operador'
        	]);

        factory(Position::class)->create(
        	[
        		'name'=> 'Conductor'
        	]);

        factory(Position::class)->create(
        	[
        		'name'=> 'Secretaria'
        	]);

        factory(Position::class)->create(
        	[
        		'name'=> 'Tecnico'
        	]);

        factory(Position::class)->create(
        	[
        		'name'=> 'Supervisor'
        	]);

        factory(Position::class)->create(
        	[
        		'name'=> 'Agente'
        	]);
    }
}
