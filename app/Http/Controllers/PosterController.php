<?php

namespace App\Http\Controllers;

use App\Models\poster;
use Illuminate\Http\Request;
use App\Http\Requests\StoreposterRequest;
use App\Http\Requests\UpdateposterRequest;

class PosterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        return view('admin/poster');
    }
    /**
     * Tampilkan tabel kupon.
     */
    public function tabel()
    {
        return view('admin/table_poster', [
            'poster' => Poster::orderBy('created_at', 'desc')->paginate(5),
        ]);
    }
    /**
     * Simpan data kupon baru ke database.
     */
    public function create(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Simpan file gambar
        $fileName = null;
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $fileName);
        }

        // Simpan data ke database
        Poster::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'image' => $fileName,  // Pastikan menggunakan 'image'
        ]);

        return redirect()->route('create.poster')->with('success', 'poster berhasil ditambahkan!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreposterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(poster $poster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(poster $poster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatePoster($nama)
    {
    // Ambil data berdasarkan kategori
    $user = Poster::where('nama', $nama)->first();

    if (!$user) {
        return redirect()->route('tabel.poster')->with('error', 'Data tidak ditemukan!');
    }

    return view('admin.update_poster', compact('user')); // Kirim $user ke view
    }

    /**
     * Perbarui data kupon.
     */
    public function posterupdate(Request $request, $nama)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $poster = Poster::where('nama', $nama)->first();

        if (!$poster) {
            return redirect()->route('tabel.poster')->with('error', 'Data tidak ditemukan!');
        }

        // Proses penggantian gambar jika ada
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $fileName);

            // Hapus gambar lama jika ada
            if ($poster->image && file_exists(storage_path('app/public/images/' . $poster->image))) {
                unlink(storage_path('app/public/images/' . $poster->image));
            }

            $poster->image = $fileName;
        }

        // Update data lainnya
        $poster->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'image' => $poster->image,  // Pastikan menggunakan 'image'
        ]);

        return redirect()->route('tabel.poster')->with('success', 'poster berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nama)
    {
        $poster = Poster::where('nama', $nama)->first();

        if (!$poster) {
            return redirect()->route('tabel.poster')->with('error', 'Data tidak ditemukan!');
        }

        // Hapus gambar jika ada
        if ($poster->image && file_exists(storage_path('app/public/images/' . $poster->image))) {
            unlink(storage_path('app/public/images/' . $poster->image));
        }

        // Hapus data kupon
        $poster->delete();

        return redirect()->route('tabel.poster')->with('success', 'poster berhasil dihapus!');
    }
}
