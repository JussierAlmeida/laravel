<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fornecedoresController extends Controller
{
    public function fornecedores(){
        return view('site.fornecedores');
    }
}