<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\EducationHistoryController;
use App\Models\Contact;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

Route::get('/', function () { return view('welcome'); });
Route::get('/about', function () { return view('about'); });
Route::get('/education', [EducationHistoryController::class, 'index']);
Route::get('/portfolio', [ProjectController::class, 'index']);
Route::get('/contact', function () { return view('contact'); });
Route::post('/contact', [ContactController::class, 'store']);