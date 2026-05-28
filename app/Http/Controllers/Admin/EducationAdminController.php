<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EducationHistory;
use Illuminate\Http\Request;

class EducationAdminController extends Controller
{
    //1. TAMPILKAN DAFTAR DATA (READ)
    public function index()
    {
        $educations = EducationHistory::orderBy('start_year', 'desc')->get();
        return view('admin.education.index', compact('educations'));
    }

    // 2. TAMPILKAN FORM TAMBAH DATA
    public function create()
    {
        return view('admin.education.create');
    }

    // 3. PROSES SIMPAN DATA BARU (CREATE)
    public function store(Request $request)
    {
        $request->validate([
            'school_name' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'start_year' => 'required|string|max:4',
            'end_year' => 'nullable|string|max:4',
        ]);

        EducationHistory::create($request->all());

        return redirect()->route('admin.education.index')->with('success', 'Data riwayat pendidikan berhasil ditambahkan.');
    }

    // 4. TAMPILKAN FORM EDIT DATA
    public function edit($id)
    {
        $education = EducationHistory::findOrFail($id);
        return view('admin.education.edit', compact('education'));
    }

    // 5. PROSES UPDATE DATA (UPDATE)
    public function update(Request $request, $id)
    {
        $request->validate([
            'school_name' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'start_year' => 'required|string|max:4',
            'end_year' => 'nullable|string|max:4',
        ]);

        $education = EducationHistory::findOrFail($id);
        $education->update($request->all());

        return redirect()->route('admin.education.index')->with('success', 'Data riwayat pendidikan berhasil diperbarui.');
    }

    // 6. PROSES HAPUS DATA (DELETE)
    public function destroy($id)
    {
        $education = EducationHistory::findOrFail($id);
        $education->delete();

        return redirect()->route('admin.education.index')->with('success', 'Data riwayat pendidikan berhasil dihapus.');
    }
}
