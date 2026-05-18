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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');            // Judul proyek 
            $table->text('description');        // Penjelasan proyek
            $table->string('tech_stack');       // Teknologi yang dipakai
            $table->string('image')->nullable();// Nama file gambar yang ada di folder public/images
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
