<?php

use Illuminate\Database\Seeder;
use App\Media;

class MediasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Media::class)->create(
        	[
        		'name'=> 'Radio'
        	]);

        factory(Media::class)->create(
        	[
        		'name'=> 'Telefono'
        	]);

        factory(Media::class)->create(
        	[
        		'name'=> 'Msj'
        	]);

        factory(Media::class)->create(
        	[
        		'name'=> 'E-Mail'
        	]);
    }
}
