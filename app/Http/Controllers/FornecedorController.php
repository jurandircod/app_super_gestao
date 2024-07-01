<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [ 
            'nome' => 'fornecedor 1', 
            'status' => 'N', 
            'cnpj' => '0',
            'ddd' => '11',
            'telefone' => '0000-0000'
        ],

        1 => [ 
            'nome' => 'fornecedor 2', 
            'status' => 'N', 
            'cnpj' => '0',
            'ddd' => '85', //fortaleza
            'telefone' => '0000-0000'
        ],

        2 => [
            'nome' => 'fornecedor 2', 
            'status' => 'N', 
            'cnpj' => '0',
            'ddd' => '32',//juiz de fora
            'telefone' => '0000-0000'
        ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
