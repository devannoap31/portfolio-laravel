<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Mengambil semua data proyek dari database
        $projects = Project::all();
        // Mengirim data ke view portfolio
        return view('portfolio', compact('projects'));
    }
}
