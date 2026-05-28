<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactAdminController extends Controller
{
    public function index()
    {
        // Mengambil semua pesan kontak, diurutkan dari yang paling baru
        $contacts = Contact::latest()->get();
        
        return view('admin.contacts.index', compact('contacts'));
    }
}
