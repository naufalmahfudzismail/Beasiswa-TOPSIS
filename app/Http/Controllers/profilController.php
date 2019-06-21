<?php

namespace App\Http\Controllers;
use Auth;

class profilController extends Controller
{
    public function index()
    {
        
        return view('admin/profil');
    }
}
