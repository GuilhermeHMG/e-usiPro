<!-- -->
@extends('app.layouts.basico')

<!-- -->
@section('titulo', 'Fornecedor')

<!-- -->
@section('conteudo')

     <div>
        <div>
            <p>Fornecedor</p>
        </div>

         <div>
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

         <div>
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form action="{{ route('app.fornecedor.listar') }}" method="post">
                    @csrf
                    <input type="text" name="razao_social" placeholder="Razão Social">
                    <input type="text" name="nome_fantasia" placeholder="Nome Fantasia">
                     <input type="text" name="contato" placeholder="Contato">
                    <input type="text" name="cnpj" placeholder="CNPJ">
                    <input type="text" name="ie" placeholder="IE">
                    <input type="text" name="dt_contrato" placeholder="Data do Contrato">
                    <input type="text" name="obs" placeholder="Observação">
                    <button type="submit">Pesquisar</button>
                </form>
            </div>
        </div>

    </div>

@endsection()
