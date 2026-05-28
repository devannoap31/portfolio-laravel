<?php
use App\Http\Controllers\EducationHistoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\EducationAdminController;
use App\Http\Controllers\Admin\ContactAdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// ==========================================
// 1. RUTE FRONT-END (HALAMAN PENGUNJUNG)
// ==========================================
Route::get('/', function () { return view('welcome'); });
Route::get('/about', function () { return view('about'); });
Route::get('/education', [EducationHistoryController::class, 'index']);
Route::get('/portfolio', [ProjectController::class, 'index']);
Route::get('/contact', function () { return view('contact'); });
Route::post('/contact', [ContactController::class, 'store']);

// ==========================================
// 2. RUTE BAWAAN BREEZE (DASHBOARD & PROFILE)
// ==========================================
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ==========================================
// 3. RUTE ADMIN (CUSTOM CRUD & INBOX)
// ==========================================
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    // Rute Inbox Pesan
    Route::get('/contacts', [ContactAdminController::class, 'index'])->name('contacts.index'); 
    // Rute CRUD Pendidikan (Otomatis mencakup index, create, store, edit, update, destroy)
    Route::resource('education', EducationAdminController::class);
});
require __DIR__.'/auth.php';