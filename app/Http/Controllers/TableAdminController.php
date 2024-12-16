<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TableAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // public function table_user()
        // $user = auth()->User();
        // return view('admin/table_user',compact('user'));

        
        return view('admin/table_user',[
            'users' => User::all(),
            // 'users' => User::where('id',auth()->user()->id)->get()
        ]);
   
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        User::destroy($user->id);
        return redirect('/admin/table_user')->with ('success', 'Post has been deleted');
    }
}
