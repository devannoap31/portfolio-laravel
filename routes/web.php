<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\EducationHistoryController;
use App\Models\Contact;
use App\Models\Project;

Route::get('/', function () { return view('welcome'); });
Route::get('/about', function () { return view('about'); });
Route::get('/contact', function () { return view('contact'); });
Route::get('/education', [EducationHistoryController::class, 'index']);

Route::get('/portfolio', function () {
    // Mengambil semua data dari tabel projects
    $projects = Project::all(); 
    // Mengirim data tersebut ke file view portfolio.blade.php
    return view('portfolio', compact('projects'));
});

Route::post('/contact', function (Request $request) {
    // 1. Validasi input dari form
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ]);
    // 2. SIMPAN KE DATABASE
    Contact::create([
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message
    ]);
    // 3. Kembalikan ke halaman kontak dengan pesan sukses
    return back()->with('success', 'Terima kasih, ' . $request->name . '! Pesan Anda telah berhasil dikirim dan disimpan.');
});