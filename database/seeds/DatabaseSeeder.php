<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(TypeUsersTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(PositionsTableSeeder::class);
         $this->call(MeansTableSeeder::class);
         $this->call(MediasTableSeeder::class);
         $this->call(CasesTableSeeder::class);
         $this->call(OfficialsTableSeeder::class);
         $this->call(AttentionsTableSeeder::class);
    }
}
