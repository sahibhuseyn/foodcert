<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Foodcert Admin',
            'email' => 'demo@demo.az',
            'password' => bcrypt('demo123'),
        ]);
    }
}
