<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    /**
     * Função responsável por mostrar na view todos os motivos de contatos do banco
     */
    public function contato(Request $request)
    {
        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }

    /**
     * Função responsável por persistir dados do formulário no banco
     */
    public function salvar(Request $request)
    {
        $regras =  [
            'nome' => 'required|min:3|max:60',
            'telefone' => 'required',
            'email' => 'email|required',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedbacks = [
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 60 caracteres',

            'email.email' => 'O campo email precisa ser válido',

            'required' => 'O campo :attribute deve ser preenchido'
        ];

        $request->validate($regras, $feedbacks);

        SiteContato::create($request->all());

        /**
         * Redirecionando o usuário para a tela principal (criar view informando que a mensagem foi
         * enviada com sucesso)
         */
        return redirect()->route('site.index');
    }
}

