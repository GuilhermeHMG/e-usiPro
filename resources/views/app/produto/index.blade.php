<!-- -->
@extends('app.layouts.basico')

<!-- -->
@section('titulo', 'Produto')

<!-- -->
@section('conteudo')

     <div>
        <div>
            <p>Produto - Listar</p>
        </div>

         <div>
            <ul>
                <li><a href="{{ route('produto.create') }}">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

         <div>
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Peso</th>
                            <th scope="col">Estoque Mínimo</th>
                            <th scope="col">Estoque Máximo</th>
                            <th scope="col">Valor Venda Varej</th>
                            <th scope="col">Valor Venda Atac</th>
                            <th scope="col">Custo</th>
                            <th scope="col">Unidade ID</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->id }}</td>
                                <td>{{ $produto->tbpr_nome }}</td>
                                <td>{{ $produto->tbpr_desc }}</td>
                                <td>{{ $produto->tbpr_peso }}</td>
                                <td>{{ $produto->tbpr_est_min }}</td>
                                <td>{{ $produto->tbpr_est_max }}</td>
                                <td>{{ $produto->tbpr_vlr_vend_var }}</td>
                                <td>{{ $produto->tbpr_vlr_vend_at }}</td>
                                <td>{{ $produto->tbpr_custo }}</td>
                                <td>{{ $produto->id_unidade }}</td>
                                <td><a href="">Excluir</a></td>
                                <td><a href="">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

               {{ $produtos->appends($request)->links() }}

               <br/>
                <div class="paginator-msg">
                    Exibindo {{ $produtos->total() }} fornecedores de {{ $produtos->total() }} (de {{ $produtos->firstItem() }} a {{ $produtos->lastItem() }})
                </div>
            </div>
        </div>

    </div>

@endsection()
