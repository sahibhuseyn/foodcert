<?php

use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            'image' => "s1.jpg"
        ]);
        DB::table('works')->insert([
            'image' => "s2.jpg"
        ]);
        DB::table('works')->insert([
            'image' => "s3.jpg"
        ]);
        DB::table('works')->insert([
            'image' => "s4.jpg"
        ]);
        DB::table('works')->insert([
            'image' => "s5.jpg"
        ]);
    }
}
