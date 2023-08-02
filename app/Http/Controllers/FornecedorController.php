<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome'=>'Natal Computer',
                'status'=>'Inativo',
                'cnpj'=>'1513135844321',
                'ddd' => '11',
                'telefone' => ' 0000-0000'
            ],
            1 => [
                'nome'=>'Megabity',
                'status'=>'Ativo',
                'cnpj'=>null,
                'ddd' => '85',
                'telefone' => ' 0000-1111'
            ],
            2 => [
                'nome'=>'Positivo',
                'status'=>'Inativo',
                'cnpj'=>'65454313846446',
                'ddd' => '32',
                'telefone' => ' 0000-2222'
            ],
        
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}