<?php

use Illuminate\Database\Seeder;
use App\Official;

class OfficialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Official::class)->create(
        	[
        		'name' => 'Lourdes Herrera', 
        		'address' => 'kr 85 # 41f - 78', 
        		'phone' => '3007548963'
        	]);

         factory(Official::class)->create([
        	'name' => 'Reinaldo Daza',
        	'address' => 'kr 14 # 27 a-79',
        	'phone' => '3017893214'
        	]);

        factory(Official::class)->create([
        	'name' => 'Wendy Serrano',
        	'address' => 'cll 25 # 4-85',
        	'phone' => '3128431793'
        	]);

        factory(Official::class)->create([
        	'name' => 'Wilson Garcia',
        	'address' => 'cll 63 # 45Bis-85',
        	'phone' => '3008431598'
        	]);

        factory(Official::class)->create([
        	'name' => 'Daniel Rodriguez',
        	'address' => 'kr 7 # 85k-78',
        	'phone' => '3127412963'
        	]);

       factory(Official::class)->create([
        	'name' => 'Carlos Martinez',
        	'address' => 'kr 45 # 12-86',
        	'phone' => '3157532159'
        	]);

       factory(Official::class)->create([
        	'name' => 'Melissa Perez',
        	'address' => 'cll 1 # 52-9',
        	'phone' => '3047584963'
        	]);

       factory(Official::class)->create([
        	'name' => 'Mercedes Molina',
        	'address' => 'kr 45 # 75-321',
        	'phone' => '3201254896'
        	]);

       factory(Official::class)->create([
        	'name' => 'Jose Herrera',
        	'address' => 'kr 78 # 47-96',
        	'phone' => '3165384456'
        	]);
    }
}
