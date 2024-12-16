<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\kupon;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\OrderConfirmation; 

class OrderController extends Controller
{
    public function tabel()
    {
        return view('admin/table_order', [
            'order' => Order::orderBy('created_at', 'desc')->paginate(5),
        ]);
    }
    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,processed,cancelled,success',
        ]);
    
        $order = Order::findOrFail($id);
        $order->status = $validated['status'];
        $order->save();
    
        return redirect()->back()->with('message', 'Status berhasil diperbarui!');
    }
    public function updateorder($id)
    {
    // Ambil data berdasarkan kategori
    $order = Order::where('id', $id)->first();

    if (!$order) {
        return redirect()->route('tabel.order')->with('error', 'Data tidak ditemukan!');
    }

    return view('admin.update_order', compact('order')); // Kirim $user ke view
    }

    public function store(Request $request)
    {
    $validated = $request->validate([
        'kupon_id' => 'required|exists:kupons,id',
        'user_name' => 'required|string|max:255',
        'user_email' => 'required|email',
        'user_phone' => 'required|string|max:15',
        'payment_proof' => 'nullable|file|mimes:jpg,png,jpeg,pdf|max:2048',
    ]);

    $fileName = null;
    if ($request->hasFile('payment_proof')) {
    $fileName = time() . '.' . $request->payment_proof->extension(); // Buat nama file dengan timestamp dan ekstensi
    $request->payment_proof->storeAs('public/payment_proofs', $fileName); // Simpan di folder 'public/payment_proofs'
    }


    // Menyertakan nilai untuk ticket_id
    $order = Order::create([
        'kupon_id' => $validated['kupon_id'],
        'user_name' => $validated['user_name'],
        'user_email' => $validated['user_email'],
        'user_phone' => $validated['user_phone'],
        'payment_proof' => $fileName,
        'status' => 'pending',
    ]);

    // Debugging: cek apakah kupon terkait
    // dd($order->kupon);  // Ini akan menunjukkan apakah kupon berhasil di-load atau tidak

    // Kirim email ke user
    // Mail::to($validated['user_email'])->send(new OrderConfirmation($order));
   


    return redirect()->back()->with('message', 'Pemesanan berhasil! Tiket Anda Sedang Di proses.');
    }

    public function destroy($id)
    {
        $order = Order::where('id', $id)->first();

        if (!$order) {
            return redirect()->route('tabel.kupon')->with('error', 'Data tidak ditemukan!');
        }

        // Hapus gambar jika ada
        if ($order->image && file_exists(storage_path('app/public/images/' . $order->image))) {
            unlink(storage_path('app/public/images/' . $order->image));
        }

        // Hapus data kupon
        $order->delete();

        return redirect()->route('tabel.order')->with('success', 'Pesanan berhasil dihapus!');
    }
}
