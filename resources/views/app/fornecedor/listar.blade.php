<!-- -->
@extends('app.layouts.basico')

<!-- -->
@section('titulo', 'Fornecedor')

<!-- -->
@section('conteudo')

     <div>
        <div>
            <p>Fornecedor - Listar</p>
        </div>

         <div>
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

         <div>
            {{ $msg ?? '' }}
            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Razão Social</th>
                            <th scope="col">Nome Fantasia</th>
                            <th scope="col">Contato</th>
                            <th scope="col">CNPJ</th>
                            <th scope="col">IE</th>
                            <th scope="col">Data do Contrato</th>
                            <th scope="col">Observação</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fornecedores as $fornecedor)
                            <tr>
                                <td>{{ $fornecedor->tbf_razao_social }}</td>
                                <td>{{ $fornecedor->tbf_nome_fantasia }}</td>
                                <td>{{ $fornecedor->tbf_contato }}</td>
                                <td>{{ $fornecedor->tbf_cnpj }}</td>
                                <td>{{ $fornecedor->tbf_ie }}</td>
                                <td>{{ $fornecedor->tbf_dt_contrato }}</td>
                                <td>{{ $fornecedor->tbf_obs }}</td>
                                <td><a href="{{ route('app.fornecedor.excluir', $fornecedor->id) }}">Excluir</a></td>
                                <td><a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

               {{ $fornecedores->appends($request)->links() }}

               <br/>
                <div class="paginator-msg">
                    Exibindo {{ $fornecedores->total() }} fornecedores de {{ $fornecedores->total() }} (de {{ $fornecedores->firstItem() }} a {{ $fornecedores->lastItem() }})
                </div>
            </div>
        </div>

    </div>

@endsection()
