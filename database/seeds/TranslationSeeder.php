<?php

use Illuminate\Database\Seeder;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 1,
            'key' => 'home',
            'value' => 'Home',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'home',
            'value' => 'Ana Səhifə',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'news',
            'value' => 'Xəbərlər',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 1,
            'key' => 'news',
            'value' => 'News',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 1,
            'key' => 'service',
            'value' => 'Services',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'service',
            'value' => 'Xidmetler',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'standard',
            'value' => 'Beynelxalq Standartlar',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 1,
            'key' => 'standard',
            'value' => 'International Standards',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 1,
            'key' => 'map',
            'value' => 'Map',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'map',
            'value' => 'Xerite',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 1,
            'key' => 'address',
            'value' => 'Address',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'address',
            'value' => 'Unvanlanma',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 1,
            'key' => 'apply',
            'value' => 'Apply',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'apply',
            'value' => 'Muraciet',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'gallery',
            'value' => 'Qalereya',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'contact',
            'value' => 'Bizimlə Əlaqə',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 1,
            'key' => 'contact',
            'value' => 'Contact Us',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 2,
            'key' => 'about',
            'value' => 'Haqqımızda',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'navbar',
            'language_id' => 1,
            'key' => 'about',
            'value' => 'About Us',
        ]);



        DB::table('translations')->insert([
            'file_name' => 'index',
            'language_id' => 1,
            'key' => 'service',
            'value' => 'Services',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'index',
            'language_id' => 1,
            'key' => 'works',
            'value' => 'Our work',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'index',
            'language_id' => 1,
            'key' => 'client',
            'value' => 'Reliable Clients',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'index',
            'language_id' => 1,
            'key' => 'client_satisfied',
            'value' => 'Satisfied Clients',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'index',
            'language_id' => 1,
            'key' => 'news',
            'value' => 'Latest News',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'index',
            'language_id' => 1,
            'key' => 'links',
            'value' => 'Links',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'index',
            'language_id' => 1,
            'key' => 'motto',
            'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore',
        ]);

        DB::table('translations')->insert([
            'file_name' => 'about_us',
            'language_id' => 2,
            'key' => 'about',
            'value' => '“FOOD CERT” MMC 12 yanvar 2016-cı ildə təsis edilmiş və 01 fevral 2016-ci ildə Azərbaycan Respublikası Vergilər Nazirliyində dövlət reyestrində qeydiyyatdan keçmişdir.

“FOOD CERT” MMC-nin təsis edilməsində əsas məqsəd ölkəmizdə yerləşən qida istehsalı müəssisələrində, beynəlxalq qida standartlarının tələblərinə əsasən qida təhlükəsizliyi idarəetmə sisteminin qurulması və təkmilləşdirilməsinə, bu sahədə fəaliyyət göstərən sahibkarlara məsləhət, audit, treninq xidmətlərinin göstərilməsinə, xidmət müəssisələrində qida və xidmətlərin keyfiyyət və təhlükəsizliyinin beynəlxalq standartların tələbləri əsasında yüksəldilməsinə dəstək verməkdir.',
        ]);
        DB::table('translations')->insert([
            'file_name' => 'about_us',
            'language_id' => 1,
            'key' => 'about',
            'value' => '“FOOD CERT” MMC 12 yanvar 2016-cı ildə təsis edilmiş və 01 fevral 2016-ci ildə Azərbaycan Respublikası Vergilər Nazirliyində dövlət reyestrində qeydiyyatdan keçmişdir.

“FOOD CERT” MMC-nin təsis edilməsində əsas məqsəd ölkəmizdə yerləşən qida istehsalı müəssisələrində, beynəlxalq qida standartlarının tələblərinə əsasən qida təhlükəsizliyi idarəetmə sisteminin qurulması və təkmilləşdirilməsinə, bu sahədə fəaliyyət göstərən sahibkarlara məsləhət, audit, treninq xidmətlərinin göstərilməsinə, xidmət müəssisələrində qida və xidmətlərin keyfiyyət və təhlükəsizliyinin beynəlxalq standartların tələbləri əsasında yüksəldilməsinə dəstək verməkdir.',
        ]);

    }
}
