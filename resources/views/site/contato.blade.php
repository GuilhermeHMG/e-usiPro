<!-- -->
@extends('site.layouts.basico')

<!-- -->
@section('titulo', 'Contato')

<!-- -->
@section('conteudo')

     <div>
        <div>
            <h1 class="text-center">Entre em contato conosco</h1>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <!-- -->
                    @component('site.layouts._components.form_contato', ['motivo_contatos' => $motivo_contatos])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>

@endsection()
