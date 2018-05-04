<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'language_id' => 1,
            'slug' => 'title',
            'title' => 'Title',
            'image' => 'g1.jpg',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'created_at' => '2018-01-03 00:00:00',
        ]);
        DB::table('news')->insert([
            'language_id' => 1,
            'slug' => 'title1',
            'title' => 'Title 1',
            'image' => 'g2.jpg',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'created_at' => '2018-01-03 00:00:00',
        ]);
        DB::table('news')->insert([
            'language_id' => 1,
            'slug' => 'title2',
            'title' => 'Title2',
            'image' => 'g3.jpg',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'created_at' => '2018-01-03 00:00:00',
        ]);
    }
}
