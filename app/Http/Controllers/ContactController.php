<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Method untuk memproses form yang dikirim (POST)
    public function store(Request $request)
    {
        // 1. Validasi
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // 2. Simpan ke Database
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        // 3. Kembalikan ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Terima kasih, ' . $request->name . '! Pesan Anda telah berhasil dikirim dan disimpan.');
    }
}
