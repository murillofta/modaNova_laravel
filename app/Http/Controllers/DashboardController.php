<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->check() && auth()->user()->id_rol !== 1) {
            return redirect('/')->with('error', 'Acceso no autorizado.');
        }
        
    
        return view('dashboard'); // Retorna la vista 'dashboard.blade.php'
    }
}

