<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');     // Kolom untuk menyimpan nama
            $table->string('email');    // Kolom untuk menyimpan email
            $table->text('message');    // Kolom teks panjang untuk isi pesan
            $table->timestamps();       // Otomatis membuat kolom created_at (waktu pesan dikirim)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
