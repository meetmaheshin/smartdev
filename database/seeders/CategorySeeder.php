<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            ['title' => 'Accounting & Consulting', 'type' => 0],
            ['title' => 'Admin Support', 'type' => 0],
            ['title' => 'Customer Service', 'type' => 0],
            ['title' => 'Data Science & Analytics', 'type' => 0],
            ['title' => 'Design & Creative', 'type' => 0],
            ['title' => 'Engineering & Architecture', 'type' => 0],
            ['title' => 'IT & Networking', 'type' => 0],
            ['title' => 'Legal', 'type' => 0],
            ['title' => 'Sales & Marketing', 'type' => 0],
            ['title' => 'Web, Mobile & Software Dev', 'type' => 0],
            ['title' => 'Smart Contract', 'type' => 1],
            ['title' => 'Web Mobile and Software Development', 'type' => 1],
            ['title' => 'Consulting & Advisory', 'type' => 1],
            ['title' => 'Sales & Marketing', 'type' => 1],
            ['title' => 'Design & Creatives', 'type' => 1],
        ];

        DB::table('categories')->insert($titles);
    }
}
