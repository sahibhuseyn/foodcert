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
         $this->call(UsersTableSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(TranslationSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(WorkSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(PartnerSeeder::class);
    }
}
