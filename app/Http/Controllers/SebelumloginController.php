<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SebelumloginController extends Controller
{
    //
    public function gallery()
    {
        return view('sebelum_login/gallery');
    }

    public function tips()
    {
        return view('sebelum_login/tips');
    }

    public function home()
    {
        return view('/home');
    }

    public function login()
    {
        return view('/auth/login');
    }


    
}
