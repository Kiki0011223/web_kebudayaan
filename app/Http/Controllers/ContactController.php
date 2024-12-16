<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Routing\Controller;
use App\Http\Requests\StorecontactRequest;
use App\Http\Requests\UpdatecontactRequest;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin/table_ulasan', [
            'contact' => Contact::paginate(5, ['*'], 'page'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Validasi data formulir
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'komentar' => 'required|string',
        ]);

        // Simpan data ke dalam database
        $contact = new Contact();
        $contact->nama = $request->input('nama');
        $contact->email = $request->input('email');
        $contact->rating = $request->input('rating');
        $contact->komentar = $request->input('komentar');
        $contact->save();

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('contact')->with('success', 'Data ulasan berhasil disimpan!');
    }
   

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecontactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecontactRequest $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nama)
    {
        // Temukan dan hapus user berdasarkan nama (atau field lain yang sesuai)
        $user = contact::where('nama', $nama)->first();
    
        // Periksa apakah user ditemukan
        if (!$user) {
            return redirect('/admin/table_ulasan')->with('error', 'User not found');
        }
    
        // Hapus user
        $user->delete();
    
        // Redirect dengan pesan sukses
        return redirect('/admin/table_ulasan')->with('success', 'User has been deleted');
    }
}
