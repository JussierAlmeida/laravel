<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clienteController extends Controller
{
    public function cliente(){
        return view('site.cliente');
    }
}
