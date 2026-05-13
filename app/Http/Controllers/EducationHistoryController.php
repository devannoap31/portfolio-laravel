<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EducationHistoryController extends Controller
{
    public function index()
    {
        $educations = DB::table('education_histories')->get();
        return view('education', [
            'educations' => $educations
            ]);
    }
}
