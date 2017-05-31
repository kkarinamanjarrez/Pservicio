<?php

use Illuminate\Database\Seeder;
use App\Cases;

class CasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	factory(Cases::class)->create(
     		[
     			'date' => '2017-01-05'
     		]);

     	factory(Cases::class)->create([
        	'date' => '2017-01-25'
        	]);

        factory(Cases::class)->create([
        	'date' => '2017-02-12'
        	]);

        factory(Cases::class)->create([
        	'date' => '2017-02-24'
        	]);

        factory(Cases::class)->create([
        	'date' => '2017-03-03'
        	]);

        factory(Cases::class)->create([
        	'date' => '2017-03-30'
        	]);

        factory(Cases::class)->create([
        	'date' => '2017-03-31'
        	]);

        factory(Cases::class)->create([
        	'date' => '2017-04-05'
        	]);

        factory(Cases::class)->create([
        	'date' => '2017-04-08'
        	]);

        factory(Cases::class)->create([
        	'date' => '2017-04-18'
        	]);

        factory(Cases::class)->create([
        	'date' => '2017-04-28'
        	]);

        factory(Cases::class)->create([
        	'date' => '2017-04-30'
        	]);
    }
}
