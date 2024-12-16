<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\kupon;
use App\Models\poster;
use App\Models\User;
use Illuminate\Http\Request;

class SetelahloginController extends Controller
{
    //
    public function biodata()
    {
        $user = auth()->User();
        return view('setelah_login/biodata',compact('user'));
    }

    public function gallery()
    {
         // Mengambil semua data dari tabel 'posters'
         $posters = Poster::orderBy('created_at', 'desc')->paginate(9);
    
    // Mengirim data ke view
    return view('setelah_login.gallery', compact('posters'));
    }

    public function tips()
    {
        return view('setelah_login/tips');
    }


    public function contact()
    {
        return view('setelah_login/contact');
    }

    public function event()
    {
        $kupons = Kupon::orderBy('created_at', 'desc')->paginate(4);
        return view('setelah_login/event', compact('kupons'));
    }

    public function harga()
    {
       
        return view('setelah_login/harga',[
            'product' => product::all(),
        ]);
        
        
    }

    public function kupon()
    {
        return view('setelah_login/kupon', ['kupon' => kupon::all()]);
    }

    public function order()
    {
        $kupons = Kupon::all();
        return view('setelah_login/order', compact('kupons'));
    }
    

}
