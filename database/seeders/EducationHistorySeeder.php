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
                'school_name' => 'SD Negeri Pajang III Surakarta',
                'degree' => 'Sekolah Dasar',
                'start_year' => 2012,
                'end_year' => 2018,
            ],
            [
                'school_name' => 'SMP Negeri 9 Surakarta',
                'degree' => 'Sekolah Menengah Pertama',
                'start_year' => 2018,
                'end_year' => 2021,
            ],
            [
                'school_name' => 'SMK Negeri 2 Surakarta',
                'degree' => 'Teknik Komputer dan Jaringan',
                'start_year' => 2021,
                'end_year' => 2024,
            ],
        ]);
    }
}
