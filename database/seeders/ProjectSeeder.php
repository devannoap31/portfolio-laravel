<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Sistem Kas HIMAPROTEKSA',
            'description' => 'Aplikasi manajemen keuangan untuk organisasi mahasiswa dengan fitur pelaporan format PDF dan sistem penagihan.',
            'tech_stack' => 'Laravel, MySQL',
            'image' => 'simkas-app.png'
        ]);

        Project::create([
            'title' => 'Sea Laundry Solo',
            'description' => 'Website promosional statis. Dibangun murni tanpa database untuk performa maksimal dengan integrasi tombol langsung ke WhatsApp admin.',
            'tech_stack' => 'HTML/CSS Murni, Vanilla JS',
            'image' => 'sea-laundry.png'
        ]);
    }
}
