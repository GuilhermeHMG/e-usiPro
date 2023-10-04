<!-- -->
@extends('site.layouts.basico')

<!-- -->
@section('titulo', $titulo)

<!-- -->
@section('conteudo')

     <div>
        <div>
            <h1 class="text-center">Login</h1>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <form action="{{ route('site.login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" name="usuario" value="{{ old('usuario') }}" type="text" placeholder="Usuário"><br/>
                            {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}
                            <input class="form-control" name="senha" value="{{ old('senha') }}" type="password" placeholder="Senha" aria-describedby="passwordHelpBlock"><br>
                            {{ $errors->has('senha') ? $errors->first('senha') : '' }}
                            <button class="btn btn-primary" type="submit">Acessar</button>
                        </div>
                    </form>
                    {{ isset($erro) && $erro != '' ? $erro : '' }}
                </div>
            </div>
        </div>
    </div>

@endsection()
