<?php

use Illuminate\Database\Seeder;
use App\Attention;

class AttentionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Attention::class)->create([
        	'date' => '2017-01-25'
        	]);

        factory(Attention::class)->create([
        	'date' => '2017-02-12'
        	]);

        factory(Attention::class)->create([
        	'date' => '2017-02-24'
        	]);

        factory(Attention::class)->create([
        	'date' => '2017-03-3'
        	]);

        factory(Attention::class)->create([
        	'date' => '2017-03-30'
        	]);

        factory(Attention::class)->create([
        	'date' => '2017-03-31'
        	]);

        factory(Attention::class)->create([
        	'date' => '2017-04-5'
        	]);

        factory(Attention::class)->create([
        	'date' => '2017-04-8'
        	]);

        factory(Attention::class)->create([
        	'date' => '2017-04-18'
        	]);

        factory(Attention::class)->create([
        	'date' => '2017-04-28'
        	]);

        factory(Attention::class)->create([
        	'date' => '2017-04-30'
        	]);
    }
}
