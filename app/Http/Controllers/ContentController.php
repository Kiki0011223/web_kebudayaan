<?php

namespace App\Http\Controllers;

use App\Models\content;
use Illuminate\Http\Request;
use App\Http\Requests\StorecontentRequest;
use App\Http\Requests\UpdatecontentRequest;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        return view('admin/content');
    }

    /**
     * Tampilkan tabel kupon.
     */
    public function tabel()
    {
        return view('admin/table_content', [
            'content' => Content::orderBy('created_at', 'desc')->paginate(5),
        ]);
    }
    /**
     * Simpan data kupon baru ke database.
     */
    public function create(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'paragraft1' => 'required',
            'paragraft2' => 'required',
            'paragraft3' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan file gambar
        $fileName = null;
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $fileName);
        }

        // Simpan data ke database
        Content::create([
            'judul' => $request->judul,
            'paragraft1' => $request->paragraft1,
            'paragraft2' => $request->paragraft2,
            'paragraft3' => $request->paragraft3,
            'image' => $fileName,  // Pastikan menggunakan 'image'
        ]);

        return redirect()->route('create.content')->with('success', 'Content berhasil ditambahkan!');
    }

    public function updatecontent($judul)
    {
    // Ambil data berdasarkan kategori
    $user = Content::where('judul', $judul)->first();

    if (!$user) {
        return redirect()->route('tabel.content')->with('error', 'Data tidak ditemukan!');
    }

    return view('admin.update_content', compact('user')); // Kirim $user ke view
    }

    /**
     * Perbarui data kupon.
     */
    public function contentupdate(Request $request, $judul)
    {
        $request->validate([
            'judul' => 'required',
            'paragraft1' => 'required',
            'paragraft2' => 'required',
            'paragraft3' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $content = Content::where('judul', $judul)->first();

        if (!$content) {
            return redirect()->route('tabel.content')->with('error', 'Content tidak ditemukan!');
        }

        // Proses penggantian gambar jika ada
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $fileName);

            // Hapus gambar lama jika ada
            if ($content->image && file_exists(storage_path('app/public/images/' . $content->image))) {
                unlink(storage_path('app/public/images/' . $content->image));
            }

            $content->image = $fileName;
        }

        // Update data lainnya
        $content->update([
            'judul' => $request->judul,
            'paragraft1' => $request->paragraft1,
            'paragraft2' => $request->paragraft2,
            'paragraft3' => $request->paragraft3,
            'image' =>  $content->image,  // Pastikan menggunakan 'image'
        ]);

        return redirect()->route('tabel.content')->with('success', 'Content berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($judul)
    {
        $content = Content::where('judul', $judul)->first();

        if (!$content) {
            return redirect()->route('tabel.content')->with('error', 'Data tidak ditemukan!');
        }

        // Hapus gambar jika ada
        if ($content->image && file_exists(storage_path('app/public/images/' . $content->image))) {
            unlink(storage_path('app/public/images/' . $content->image));
        }

        // Hapus data kupon
        $content->delete();

        return redirect()->route('tabel.content')->with('success', 'content berhasil dihapus!');
    }
}
