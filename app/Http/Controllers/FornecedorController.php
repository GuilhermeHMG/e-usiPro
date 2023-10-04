<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;

class FornecedorController extends Controller
{
    public function index()
    {
        return view('app.fornecedor.index');
    }

    public function listar(Request $request)
    {
        //Trazendo os registros do banco de dados de acordo com as informações vindas no request
        $fornecedores = Fornecedor::where('tbf_razao_social', 'like', '%'.$request->input('razao_social').'%')
            ->where('tbf_nome_fantasia', 'like', '%'.$request->input('nome_fantasia').'%')
            ->where('tbf_contato', 'like', '%'.$request->input('contato').'%')
            ->where('tbf_cnpj', 'like', '%'.$request->input('cnpj').'%')
            ->where('tbf_ie', 'like', '%'.$request->input('ie').'%')
            ->where('tbf_dt_contrato', 'like', '%'.$request->input('dt_contrato').'%')
            ->where('tbf_obs', 'like', '%'.$request->input('obs').'%')
            ->get();

        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores]);
    }

    public function adicionar(Request $request)
    {
        $msg = "";

        if($request->input('_token') != ''){
            //validacao
            $regras = [
                'tbf_razao_social' => 'required',
                'tbf_nome_fantasia' => 'required',
                'tbf_contato' => 'required',
                'tbf_cnpj' => 'required',
                'tbf_ie' => 'required',
                'tbf_dt_contrato' => 'required',
                'tbf_obs' => 'required'

            ];

            $feedbacks = [
                'required' => 'O campo :attribute deve ser preenchido'
            ];

            $request->validate($regras, $feedbacks);

            Fornecedor::create($request->all());

            //dados view
            $msg = "Cadastro realizado com sucesso";
        }

        return view('app.fornecedor.adicionar', ['msg' => $msg]);
    }
}
