<?php

use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            'image' => "1.png",
        ]);
        DB::table('partners')->insert([
            'image' => "2.png",
        ]);
        DB::table('partners')->insert([
            'image' => "3.png",
        ]);
        DB::table('partners')->insert([
            'image' => "4.png",
        ]);
        DB::table('partners')->insert([
            'image' => "5.png",
        ]);

    }
}
