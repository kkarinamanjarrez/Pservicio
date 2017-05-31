<?php

use Illuminate\Database\Seeder;
use App\TypeUser;

class TypeUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TypeUser::class)->create(
            [
                'name' => 'Administrador',
            ]);

        factory(TypeUser::class)->create(
        	[
        		'name' => 'Participante'
        	]);

        factory(TypeUser::class)->create(
        	[
        		'name' => 'Supervisor'
        	]);
    }
}
