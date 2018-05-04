<?php

use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'image' => 't1.jpg',
            'position' => 'designer',
            'language_id' => 1,
            'feedback' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.',
            'name' => 'Catherine Grace'
        ]);
        DB::table('testimonials')->insert([
            'image' => 't2.jpg',
            'position' => 'Tester',
            'language_id' => 1,
            'feedback' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.',
            'name' => 'Catherine Grace'
        ]);
        DB::table('testimonials')->insert([
            'image' => 't2.jpg',
            'position' => 'CEO',
            'language_id' => 1,
            'feedback' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque est quasi, quas ipsam, expedita placeat facilis odio illo ex accusantium eaque itaque officiis et sit. Vero quo, impedit neque.',
            'name' => 'Catherine Grace'
        ]);
    }
}
