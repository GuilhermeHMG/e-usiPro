<form action={{ route('site.contato') }} method="post">
    @csrf
    <br/><div class="form-group">
        <label for="name">Nome</label>
        <input class="form-control" id="name" name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome">
        {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    </div><br/>
    <div class="form-group">
        <label for="tel">Telefone</label>
        <input class="form-control" id="tel" name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone">
        {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
    </div><br/>
     <div class="form-group">
        <label for="email">E-mail</label>
        <input class="form-control" id="email" name="email" value="{{ old('email') }}" type="text" placeholder="E-mail">
        {{ $errors->has('email') ? $errors->first('email') : '' }}
        <br/><small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
    </div><br/>
   <div class="form-group">
    <select class="form-control" name="motivo_contatos_id">
        <option value="">Qual o motivo do contato?</option>

        @foreach($motivo_contatos as $key => $motivo_contato)
             <option value="{{ $motivo_contato->id }}" {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : '' }}>{{ $motivo_contato->motivo_contato }}</option>
        @endforeach

    </select>
    {{ $errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : '' }}
    </div><br/>
    <div class="form-group">
    <textarea class="form-control" name="mensagem">{{ old('mensagem') != '' ? old('mensagem') : 'Preencha aqui a sua mensagem' }}</textarea>
    {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}
    </div><br/>
    <!--<div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Clique em mim</label>
    </div><br/>-->
    <button class="btn btn-primary" type="submit">ENVIAR</button>
</form>

{{-- Caso existam erros de preenchimento nos campos do formulário, faça... --}}
{{-- @if($errors->any())
    <div style="position:absolute; top:0px; left:0px; width:100%; background:red;">
        @foreach ($errors->all() as $erro)
            {{ $erro }}
            <br/>
        @endforeach
    </div>
@endif --}}
