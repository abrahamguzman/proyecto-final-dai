<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $rol = Auth::user()->rol;

        if($rol == 'admin')
        {
            return view('admin.begin');
        }
        else{
            return view('dashboard');
        }
    }
}
