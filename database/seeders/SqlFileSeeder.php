<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SqlFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = public_path('sql/specialties.sql');
        $sql = file_get_contents($path);
        DB::unprepared($sql);
        $path = public_path('sql/skills.sql');
        $sql = file_get_contents($path);
        DB::unprepared($sql);
        $path = public_path('sql/category_speciality_skill.sql');
        $sql = file_get_contents($path);
        DB::unprepared($sql);
    }
}
