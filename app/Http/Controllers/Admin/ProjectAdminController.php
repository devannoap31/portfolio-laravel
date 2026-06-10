<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectAdminController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|url',
        ]);

        $imagePath = $request->file('image')->store('projects', 'public');

        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'link' => $request->link,
        ]);

        return redirect()->route('admin.projects.index')->with('status', 'PROJECT_ADDED');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $project->image = $request->file('image')->store('projects', 'public');
        }

        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
        ]);

        return redirect()->route('admin.projects.index')->with('status', 'PROJECT_UPDATED');
    }

    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }
        $project->delete();

        return redirect()->route('admin.projects.index')->with('status', 'PROJECT_DELETED');
    }
}
