<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => "Qida təhlükəsizliyi",
            'language_id' => 2,
            'description' => "Qida təhlükəsizliyi idarəetmə sistemlərinin müvafiq beynəlxalq standartın tələblərinə əsasən qurulması",
        ]);
        DB::table('services')->insert([
            'title' => "HACCP",
            'description' => "HACCP prinsinplərinin və addımlarının tətbiq edilməsi",
            'language_id' => 2,
        ]);
        DB::table('services')->insert([
            'title' => "Verifikasiya və validasiya",
            'description' => "Verifikasiya və validasiya fəaliyyətlərinin qurulması və dəstəklənməsi",
            'language_id' => 2,
        ]);
        DB::table('services')->insert([
            'title' => "İSO 22002-2:2013 standartı",
            'description' => "İSO 22002-2:2013 standartına əsasən operativ ilkin vacib şərtlər proqramı (oprp) və ümumi ilkin vacib şərtlər proqramının qurulması (prp)",
            'language_id' => 2,
        ]);
        DB::table('services')->insert([
            'title' => "Sənədləşmə sisteminin yoxlanılması",
            'language_id' => 2,
            'description' => "Sənədləşmə sisteminin yoxlanılması, təhlili, yenilənməsi, habelə müvafiq qida təhlükəsizliyi prosedur, forma və təlimatlarının ən son yenilənmiş standartlara əsasən hazırlanması",
        ]);
        DB::table('services')->insert([
            'title' => "PDCA diaqraması",
            'language_id' => 2,
            'description' => "İki standart tətbiq olunan müəssisələrdə PDCA Plan-Do-Check-Act diaqraması üzərində işlərin idarə olunmasının planlaşdırılması",
        ]);
        DB::table('services')->insert([
            'title' => "Qida zənciri",
            'language_id' => 2,
            'description' => "Qida zəncirində fövqəladə hallara qarşı hazırlıq və krizis idarəedilməsi qaydalarının tətbiq edilməsi",
        ]);
        DB::table('services')->insert([
            'title' => "Qida məhsullarının saxlanması",
            'language_id' => 2,
            'description' => "Qida məhsullarının saxlanması və çarpaz çirklənməsinin qarşısının alınması üzrə inspeksiyaların keçirilməsi",
        ]);





        DB::table('services')->insert([
            'title' => "HACCP",
            'description' => "HACCP prinsinplərinin və addımlarının tətbiq edilməsi",
            'language_id' => 1,
        ]);
        DB::table('services')->insert([
            'title' => "Verifikasiya və validasiya",
            'description' => "Verifikasiya və validasiya fəaliyyətlərinin qurulması və dəstəklənməsi",
            'language_id' => 1,
        ]);
        DB::table('services')->insert([
            'title' => "İSO 22002-2:2013 standartı",
            'description' => "İSO 22002-2:2013 standartına əsasən operativ ilkin vacib şərtlər proqramı (oprp) və ümumi ilkin vacib şərtlər proqramının qurulması (prp)",
            'language_id' => 1,
        ]);
        DB::table('services')->insert([
            'title' => "Sənədləşmə sisteminin yoxlanılması",
            'language_id' => 1,
            'description' => "Sənədləşmə sisteminin yoxlanılması, təhlili, yenilənməsi, habelə müvafiq qida təhlükəsizliyi prosedur, forma və təlimatlarının ən son yenilənmiş standartlara əsasən hazırlanması",
        ]);
        DB::table('services')->insert([
            'title' => "PDCA diaqraması",
            'language_id' => 1,
            'description' => "İki standart tətbiq olunan müəssisələrdə PDCA Plan-Do-Check-Act diaqraması üzərində işlərin idarə olunmasının planlaşdırılması",
        ]);
        DB::table('services')->insert([
            'title' => "Qida zənciri",
            'language_id' => 1,
            'description' => "Qida zəncirində fövqəladə hallara qarşı hazırlıq və krizis idarəedilməsi qaydalarının tətbiq edilməsi",
        ]);
        DB::table('services')->insert([
            'title' => "Qida məhsullarının saxlanması",
            'language_id' => 1,
            'description' => "Qida məhsullarının saxlanması və çarpaz çirklənməsinin qarşısının alınması üzrə inspeksiyaların keçirilməsi",
        ]);

    }
}
