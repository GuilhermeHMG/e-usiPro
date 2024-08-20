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
                <form method="post" action="">
                    @csrf
                    <input name="tbpr_nome" type="text" value="" placeholder="Nome" class="borda-preta">

                    <input name="tbpr_desc" type="text" value="" placeholder="Descrição" class="borda-preta">

                    <input name="tbpr_peso" type="number" step="0.001" min=0 value="" placeholder="Peso" class="borda-preta">

                    <input name="tbpr_est_min" type="number" step="0" min=0 value="" placeholder="Estoque Mínimo" class="borda-preta">

                    <input name="tbpr_est_max" type="number" step="0" min=0 value="" placeholder="Estoque Máximo" class="borda-preta">

                    <input name="tbpr_vlr_vend_var" type="number" step="0.01" min=0 value="" placeholder="Vlr Venda Varejo" class="borda-preta">

                    <input name="tbpr_vlr_vend_at" type="number" step="0.01" min=0 value="" placeholder="Vlr Venda Atacado" class="borda-preta">

                    <input name="tbpr_custo" type="number" step="0.01" min=0 value="" placeholder="Custo" class="borda-preta">

                    <select name="id_unidade">
                        <option>-- Selecione a Unidade de Medida --</option>
                        <option value="1">Unidade</option>
                        <option value="2">Quilograma</option>
                    </select>

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
