@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Produto - Adicionar</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form method="post" action="{{ route('produto.store') }}">
                    @csrf
                    <input name="tbpr_nome" type="text" value="{{ old('tbpr_nome') }}" placeholder="Nome" class="borda-preta">
                    {{ $errors->has('tbpr_nome') ? $errors->first('tbpr_nome') : '' }}

                    <input name="tbpr_desc" type="text" value="{{ old('tbpr_desc') }}" placeholder="Descrição" class="borda-preta">
                    {{ $errors->has('tbpr_desc') ? $errors->first('tbpr_desc') : '' }}

                    <input name="tbpr_peso" type="number" step="0.001" min=0 value="{{ old('tbpr_peso') }}" placeholder="Peso" class="borda-preta">
                    {{ $errors->has('tbpr_peso') ? $errors->first('tbpr_peso') : '' }}

                    <input name="tbpr_est_min" type="number" step="0" min=0 value="{{ old('tbpr_est_min') }}" placeholder="Estoque Mínimo" class="borda-preta">
                    {{ $errors->has('tbpr_est_min') ? $errors->first('tbpr_est_min') : '' }}

                    <input name="tbpr_est_max" type="number" step="0" min=0 value="{{ old('tbpr_est_max') }}" placeholder="Estoque Máximo" class="borda-preta">
                    {{ $errors->has('tbpr_est_max') ? $errors->first('tbpr_est_max') : '' }}

                    <input name="tbpr_vlr_vend_var" type="number" step="0.01" min=0 value="{{ old('tbpr_vlr_vend_var') }}" placeholder="Vlr Venda Varejo" class="borda-preta">
                    {{ $errors->has('tbpr_vlr_vend_var') ? $errors->first('tbpr_vlr_vend_var') : '' }}

                    <input name="tbpr_vlr_vend_at" type="number" step="0.01" min=0 value="{{ old('tbpr_vlr_vend_at') }}" placeholder="Vlr Venda Atacado" class="borda-preta">
                    {{ $errors->has('tbpr_vlr_vend_at') ? $errors->first('tbpr_vlr_vend_at') : '' }}

                    <input name="tbpr_custo" type="number" step="0.01" min=0 value="{{ old('tbpr_custo') }}" placeholder="Custo" class="borda-preta">
                    {{ $errors->has('tbpr_custo') ? $errors->first('tbpr_custo') : '' }}

                    <select name="id_unidade">
                        <option>-- Selecione a Unidade de Medida --</option>

                         @foreach ($unidades as $unidade)
                            <option value="{{ $unidade->id }}" {{ old('id_unidade') == $unidade->id ? 'selected' : '' }}>{{ $unidade->tbu_descricao }}</option>
                        @endforeach

                    </select>
                    {{ $errors->has('id_unidade') ? $errors->first('id_unidade') : '' }}

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
