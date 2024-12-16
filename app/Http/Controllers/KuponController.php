<?php

namespace App\Http\Controllers;

use App\Models\Kupon;
use Illuminate\Http\Request;

class KuponController extends Controller
{
    /**
     * Tampilkan halaman pembuatan kupon.
     */
    public function view()
    {
        return view('admin/kupondiskon');
    }

    /**
     * Tampilkan tabel kupon.
     */
    public function tabel()
    {
        return view('admin/table_kupon', [
            'kupon' => Kupon::orderBy('created_at', 'desc')->paginate(5),
        ]);
    }

    /**
     * Simpan data kupon baru ke database.
     */
    public function create(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
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
        Kupon::create([
            'kategori' => $request->kategori,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'image' => $fileName,  // Pastikan menggunakan 'image'
        ]);

        return redirect()->route('create.kupon')->with('success', 'Tiket berhasil ditambahkan!');
    }

    public function updatekupon($kategori)
    {
    // Ambil data berdasarkan kategori
    $user = Kupon::where('kategori', $kategori)->first();

    if (!$user) {
        return redirect()->route('tabel.kupon')->with('error', 'Data tidak ditemukan!');
    }

    return view('admin.update_kupon', compact('user')); // Kirim $user ke view
    }

    /**
     * Perbarui data kupon.
     */
    public function kuponupdate(Request $request, $kategori)
    {
        $request->validate([
            'kategori' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $kupon = Kupon::where('kategori', $kategori)->first();

        if (!$kupon) {
            return redirect()->route('tabel.kupon')->with('error', 'Data tidak ditemukan!');
        }

        // Proses penggantian gambar jika ada
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $fileName);

            // Hapus gambar lama jika ada
            if ($kupon->image && file_exists(storage_path('app/public/images/' . $kupon->image))) {
                unlink(storage_path('app/public/images/' . $kupon->image));
            }

            $kupon->image = $fileName;
        }

        // Update data lainnya
        $kupon->update([
            'kategori' => $request->kategori,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'image' => $kupon->image,  // Pastikan menggunakan 'image'
        ]);

        return redirect()->route('tabel.kupon')->with('success', 'Tiket berhasil diperbarui!');
    }

    /**
     * Hapus data kupon.
     */
    public function destroy($kategori)
    {
        $kupon = Kupon::where('kategori', $kategori)->first();

        if (!$kupon) {
            return redirect()->route('tabel.kupon')->with('error', 'Data tidak ditemukan!');
        }

        // Hapus gambar jika ada
        if ($kupon->image && file_exists(storage_path('app/public/images/' . $kupon->image))) {
            unlink(storage_path('app/public/images/' . $kupon->image));
        }

        // Hapus data kupon
        $kupon->delete();

        return redirect()->route('tabel.kupon')->with('success', 'Tiket berhasil dihapus!');
    }
}
