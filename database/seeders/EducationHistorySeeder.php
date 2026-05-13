<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('education_histories')->insert([
            [
                'school_name' => 'High School A',
                'degree' => 'Science',
                'start_year' => 2015,
                'end_year' => 2018,
            ],
            [
                'school_name' => 'University B',
                'degree' => 'Computer Science',
                'start_year' => 2018,
                'end_year' => 2022,
            ],
        ]);
    }
}
