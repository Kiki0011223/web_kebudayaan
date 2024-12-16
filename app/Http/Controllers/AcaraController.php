<?php

namespace App\Http\Controllers;

use App\Models\acara;
use Illuminate\Http\Request;
use App\Http\Requests\StoreacaraRequest;
use App\Http\Requests\UpdateacaraRequest;

class AcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        return view('admin/acara');
    }

    // tampilkan table acara
    public function tabel()
    {
        return view('admin/table_acara', [
            'acara' => Acara::orderBy('created_at', 'desc')->paginate(5),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan file gambar
        $fileName = null;
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $fileName);
        }

        // Simpan data ke database
        Acara::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'image' => $fileName,  // Pastikan menggunakan 'image'
        ]);

        return redirect()->route('create.acara')->with('success', 'Acara berhasil ditambahkan!');
    }

    public function updateacara($judul)
    {
    // Ambil data berdasarkan judul
    $user = Acara::where('judul', $judul)->first();

    if (!$user) {
        return redirect()->route('tabel.acara')->with('error', 'Data tidak ditemukan!');
    }

    return view('admin.update_acara', compact('user')); // Kirim $user ke view
    }

    /**
     * Perbarui data acara.
     */
    public function acaraupdate(Request $request, $judul)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $acara = Acara::where('judul', $judul)->first();

        if (!$acara) {
            return redirect()->route('tabel.acara')->with('error', 'Data tidak ditemukan!');
        }

        // Proses penggantian gambar jika ada
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $fileName);

            // Hapus gambar lama jika ada
            if ($acara->image && file_exists(storage_path('app/public/images/' . $acara->image))) {
                unlink(storage_path('app/public/images/' . $acara->image));
            }

            $acara->image = $fileName;
        }

        // Update data lainnya
        $acara->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'image' => $acara->image,  // Pastikan menggunakan 'image'
        ]);

        // Debug data setelah update
        

        return redirect()->route('tabel.acara')->with('success', 'Acara berhasil diperbarui!');
        dd('Redirect ke tabel acara berhasil');
    }
    

    /**
     * Hapus data kupon.
     */
    public function destroy($judul)
    {
        $Acara = Acara::where('judul', $judul)->first();

        if (!$Acara) {
            return redirect()->route('tabel.acara')->with('error', 'Data tidak ditemukan!');
        }

        // Hapus gambar jika ada
        if ($Acara->image && file_exists(storage_path('app/public/images/' . $Acara->image))) {
            unlink(storage_path('app/public/images/' . $Acara->image));
        }

        // Hapus data kupon
        $Acara->delete();

        return redirect()->route('tabel.acara')->with('success', 'Acara berhasil dihapus!');
    }
}
