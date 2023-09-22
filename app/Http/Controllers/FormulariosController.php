<?php

namespace App\Http\Controllers;

class FormulariosController extends Controller
{
    public function iniciarsesion()
    {
        return view('auth\login');
    }

    public function registrar()
    {
        return view('auth\register');
    }
}

