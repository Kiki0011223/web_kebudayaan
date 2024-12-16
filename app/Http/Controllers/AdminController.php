<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\contact;
use App\Models\kupon;
use App\Models\acara;
use App\Models\content;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index()
    {
        if(Auth::id())
        {
            // Retrieve all kupons
            $kupons = Kupon::orderBy('created_at', 'desc')->paginate(4);
            $acaras = Acara::orderBy('created_at', 'desc')->paginate(4);
            $contents = Content::orderBy('created_at', 'desc')->paginate(3);
            $usertype = Auth()->user()->usertype;
            if($usertype=='user')
            {
                
                $user = auth()->User();
                return view('dashboard',compact('user', 'kupons', 'acaras', 'contents'));

            }else if($usertype=='admin')
            {
                $user = auth()->User();
                return view('/admin/adminhome',compact('user'));

            }
            else {
                return redirect()->back();
            }
        }
    }

  
    public function post()
    {
        $ratings = contact::select('rating', DB::raw('COUNT(*) as count'))
            ->groupBy('rating')
            ->orderBy('rating', 'desc')
            ->get();

        return view('admin/post', compact('ratings'));
    }

    //table

   public function show()
   {
    return view('admin/table_user',[
        'users' => User::paginate(5, ['*'], 'page'),
    ]);
   }

   public function destroy($name)
{
    // Temukan dan hapus user berdasarkan nama (atau field lain yang sesuai)
    $user = User::where('name', $name)->first();

    // Periksa apakah user ditemukan
    if (!$user) {
        return redirect('/admin/table_user')->with('error', 'User not found');
    }

    // Hapus user
    $user->delete();

    // Redirect dengan pesan sukses
    return redirect('/admin/table_user')->with('success', 'User has been deleted');
}

public function updateProfile(Request $request)
    {
        // validasi data form
        $request->validate([
            'update_nama' => 'required|string|max:255',
            'update_password' => 'nullable|string|min:6',
            'update_email' => 'required|email|max:255',
            'new_password' => 'nullable|string|min:6',
            'update_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'confirm_password' => 'same:new_password',
        ]);

        // Retrieve the authenticated user
        $user = auth()->user();

        // Update data user
        $user->name = $request->input('update_nama');
        $user->email = $request->input('update_email');

        // Update password if a new password is provided
        if ($request->filled('new_password')) {
            $user->password = bcrypt($request->input('new_password'));
        }

        // Update profile picture if a new image is provided
        if ($request->hasFile('update_image')) {
            $imagePath = $request->file('update_image')->store('profile_images', 'public');
            $user->image = $imagePath;
        }

        // Save the updated user data
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Profile berhasil di update!!');
        
    }
}
