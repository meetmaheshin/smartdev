<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Industry;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $industries = [
            ['name' => 'Aerospace'],
            ['name' => 'Agriculture & Forestry'],
            ['name' => 'Agriculture & Forestry'],
            ['name' => 'Art & Design'],
            ['name' => 'Automotive'],
            ['name' => 'Aviation'],
            ['name' => 'Education'],
            ['name' => 'Energy & Utilities'],
            ['name' => 'Engineering & Architecture'],
            ['name' => 'Fashion & Beauty'],
            ['name' => 'Finance & Accounting'],
            ['name' => 'Mining'],
            ['name' => 'Real Estate'],
            ['name' => 'Retail & Consumer Goods'],
            ['name' => 'Sales & Marketing'],
            ['name' => 'Science & Medicine'],
            ['name' => 'Sports & Recreation'],
            ['name' => 'Supply Chain & Logistics'],
            ['name' => 'Tech & IT'],
            ['name' => 'Transportation & Warehousing'],
            ['name' => 'Travel & Hostpitality'],
        ];
        foreach ($industries as $key => $value) {
            Industry::create($value);
        }
    }
}
