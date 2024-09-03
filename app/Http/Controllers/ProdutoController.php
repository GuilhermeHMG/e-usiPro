<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Unidade;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produtos = Produto::paginate(10);

    return view('app.produto.index', ['produtos' => $produtos, 'request' => $request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidades = Unidade::all();
        return view('app.produto.create', ['unidades' => $unidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'tbpr_nome' => 'required|min:3|max:40',
            'tbpr_desc' => 'required|min:3|max:2000',
            'tbpr_peso' => 'required|integer',
            'tbpr_est_min' => 'required|integer',
            'tbpr_est_max' => 'required|integer',
            'tbpr_vlr_vend_var' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'tbpr_vlr_vend_at' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'tbpr_custo' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'id_unidade' => 'exists:unidades,id'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'tbpr_nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'tbpr_nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
            'tbpr_desc.min' => 'O campo descrição deve ter no mínimo 3 caracteres',
            'tbpr_desc.max' => 'O campo nome deve ter no máximo 2000 caracteres',
            'tbpr_peso.integer' => 'O campo peso deve ser um número inteiro',
            'tbpr_est_min.integer' => 'O campo estoque mínimo deve ser um número inteiro',
            'tbpr_est_max.integer' => 'O campo estoque máximo deve ser um número inteiro',

            'id_unidade.exists' => 'A unidade de medida informada não existe'
        ];

        $request->validate($regras, $feedback);

        Produto::create($request->all());
        return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
