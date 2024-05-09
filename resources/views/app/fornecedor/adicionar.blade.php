<!-- -->
@extends('app.layouts.basico')

<!-- -->
@section('titulo', 'Fornecedor')

<!-- -->
@section('conteudo')

     <div>
        <div>
            <p>Fornecedor - Adicionar</p>
        </div>

         <div>
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

         <div>
            {{ $msg ?? '' }}
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form action="{{ route('app.fornecedor.adicionar') }}" method="post">
                    <input type="hidden" name="id" value="{{ $fornecedor->id ?? '' }}">
                    @csrf
                    <input type="text" name="tbf_razao_social" value="{{ $fornecedor->tbf_razao_social ?? old('tbf_razao_social') }}" placeholder="Razão Social">
                    {{ $errors->has('tbf_razao_social') ? $errors->first('tbf_razao_social') : '' }}

                    <input type="text" name="tbf_nome_fantasia" value="{{ $fornecedor->tbf_nome_fantasia ?? old('tbf_nome_fantasia') }}" placeholder="Nome Fantasia">
                    {{ $errors->has('tbf_nome_fantasia') ? $errors->first('tbf_nome_fantasia') : '' }}

                     <input type="text" name="tbf_contato" value="{{ $fornecedor->tbf_contato ?? old('tbf_contato') }}" placeholder="Contato">
                    {{ $errors->has('tbf_contato') ? $errors->first('tbf_contato') : '' }}

                    <input type="text" name="tbf_cnpj" value="{{ $fornecedor->tbf_cnpj ?? old('tbf_cnpj') }}" placeholder="CNPJ">
                    {{ $errors->has('tbf_cnpj') ? $errors->first('tbf_cnpj') : '' }}

                    <input type="text" name="tbf_ie" value="{{ $fornecedor->tbf_ie ?? old('tbf_ie') }}" placeholder="IE">
                    {{ $errors->has('tbf_ie') ? $errors->first('tbf_ie') : '' }}

                    <input type="text" name="tbf_dt_contrato" value="{{ $fornecedor->tbf_dt_contrato ?? old('tbf_dt_contrato') }}" placeholder="Data do Contrato">
                    {{ $errors->has('tbf_dt_contrato') ? $errors->first('tbf_dt_contrato') : '' }}

                    <input type="text" name="tbf_obs" value="{{ $fornecedor->tbf_obs ?? old('tbf_obs') }}" placeholder="Observação">
                    {{ $errors->has('tbf_obs') ? $errors->first('tbf_obs') : '' }}

                    <button type="submit">Cadastrar</button>
                </form>
            </div>
        </div>

    </div>

@endsection()
