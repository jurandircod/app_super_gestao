{{ $slot }}
<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="borda-preta">
    <!-- verifica se tem erros em nome -->
    @if ($errors->has('nome'))
        {{ $errors->first('nome') }}
    @endif
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="borda-preta">
    <!-- verifica se tem erros em telefone utilizando operador ternario e has e first -->
    {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
    <br>
    <input type="email" name="email" value="{{ old('email') }}" type="text" placeholder="E-mail"
        class="borda-preta">

    {{ $errors->has('email') ? $errors->first('email') : '' }}
    <br>

    <select name="motivo_contatos_id" value="{{ old('motivo_contato') }}" class="borda-preta">
        <option value="1" {{ old('motivo_contato' == 1 ? 'selected' : '') }}>Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $key => $motivo_contato)
            <option value="{{ $motivo_contato->id }}"
                {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : '' }}>
                {{ $motivo_contato->motivo_contato }}</option>
        @endforeach
    </select>
    {{ $errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : '' }}
    <br>
    <textarea name="mensagem" class="borda-preta">
    @if (old('mensagem') != '')
{{ old('mensagem') }}
@else
Preencha aqui a sua mensagem
@endif

</textarea>
    {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>

<!--@if ($errors->any())
<div
        style="position: absolute; top: 0; left: 0; width: 100%; height: 10%; background-color: rgba(0, 0, 0, 0.5); z-index: 1000;">
        @foreach ($errors->all() as $error)
<p>{{ $error }}</p>
@endforeach
    </div>
@endif-->
