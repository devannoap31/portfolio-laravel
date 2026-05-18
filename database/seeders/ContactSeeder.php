<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        Contact::create([
            'name' => 'Baskoro Adi Wicaksono',
            'email' => 'baskoro@poltekindonusa.ac.id',
            'message' => 'Tampilan web profile kamu sangat bagus dan memenuhi kriteria UTS. Pertahankan!'
        ]);
        Contact::create([
            'name' => 'Budi Santoso',
            'email' => 'budi.santoso@gmail.com',
            'message' => 'Halo Devanno, apakah kamu menerima tawaran pembuatan website untuk UMKM lokal?'
        ]);
    }
}
