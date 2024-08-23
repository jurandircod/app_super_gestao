<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {

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

        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {


        // realizar validações
        $request->validate([
            'nome' => 'required|min:3|max:40|unique:site_contatos', //nomes com no minimo 3 unique faz o nome so poder ter um no banco de dados caracteres e max 40;
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|min:3|max:2000', //mensagens com no minimo 3 caracteres e max 200;
        ]);

        //salva o contato 
        SiteContato::create($request->all());
        // redireciona para a pagina principal
        return redirect()->route('site.index');
    }
}
