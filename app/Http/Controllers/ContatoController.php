<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request){
        
        //dd($request->all());
        $contato = new SiteContato;
        /*$contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->telefone = $request->input('telefone');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        $contato->save();
        */
        //$contato->fill($request->all());
        //$contato->save();
        //print_r($contato->getAttributes());

        return view('site.contato', ['titulo' => 'contato (teste)']);
    }

    public function salvar(Request $request){
        

        // realizar validações
        $request->validate([
            'nome' => 'required|min:3|max:40', //nomes com no minimo 3 caracteres e max 40;
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|min:3|max:2000', //mensagens com no minimo 3 caracteres e max 200;
        ]);

        
       SiteContato::create($request->all());
    }
}
