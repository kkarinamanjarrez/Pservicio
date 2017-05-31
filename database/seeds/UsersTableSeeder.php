<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(User::class)->create(
            [
                'name' => 'Katherin Manjarrez',
                'email' => 'kkarinamanjarrez@uniguajira.edu.co',
        		'password' => '1118850759k'
            ]);

        factory(User::class, 20)->create();
    }
}
