<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function update_product()
    {
        return view('admin/update_product');
    }

    public function product()
    {
        return view('admin/product');
    }

    public function tbl_product()
    {
        return view('admin/table_product',['product'=>product::paginate(5, ['*'], 'page'),]);
    }

    public function input(Request $request)
    {
        $request->validate([
            'jenis' => 'required',
            'penawaran' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
        ]);

        // Simpan data ke dalam database
        product::create([
            'jenis' => $request->jenis,
            'penawaran' => $request->penawaran,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
        ]);

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('product')->with('success', 'Product berhasil ditambahkan!');
    }

    public function update($jenis)
    {
        // Mengambil data produk berdasarkan jenis
        $user = Product::where('jenis', $jenis)->first();

        // Menampilkan halaman pembaruan produk dengan membawa data produk
        return view('/admin/update_product', compact('user'));
    }

    public function updateproduct(Request $request, $jenis)
{
    // Validasi data yang diedit
    $request->validate([
        'jenis' => 'required',
        'penawaran' => 'required',
        'harga' => 'required',
        'kategori' => 'required',
    ]);

    // Temukan data produk berdasarkan jenis
    $product = product::where('jenis', $jenis)->first();

    // Perbarui data produk
    $product->update([
        'jenis' => $request->jenis,
        'penawaran' => $request->penawaran,
        'harga' => $request->harga,
        'kategori' => $request->kategori,
    ]);

    // Redirect atau tampilkan pesan sukses
    return redirect()->route('table_product')->with('success', 'Product berhasil diperbarui!');
}




    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($jenis)
    {
        // Temukan dan hapus user berdasarkan nama (atau field lain yang sesuai)
        $user = product::where('jenis', $jenis)->first();
    
        // Periksa apakah user ditemukan
        if (!$user) {
            return redirect('/admin/table_product')->with('error', 'User not found');
        }
    
        // Hapus user
        $user->delete();
    
        // Redirect dengan pesan sukses
        return redirect('/admin/table_product')->with('hapus', 'Product berhasil di hapus!!');
    }
}
