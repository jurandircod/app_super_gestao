{{ $slot }}
<form action="{{ route('site.contato') }}" method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="borda-preta">
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="borda-preta">
    <br>
    <input type="email" name="email" value="{{ old('email') }}" type="text" placeholder="E-mail"
        class="borda-preta">
    <br>
    <select name="motivo_contato" value="{{ old('motivo_contato') }}" class="borda-preta">
        <option value="1" {{ old('motivo_contato' == 1 ? 'selected' : '') }}>Qual o motivo do contato?</option>
        <option value="2" {{ old('motivo_contato' == 2 ? 'selected' : '') }}>Dúvida</option>
        <option value="3" {{ old('motivo_contato' == 3 ? 'selected' : '') }}>Elogio</option>
        <option value="4" {{ old('motivo_contato' == 4 ? 'selected' : '') }}>Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="borda-preta">
    @if (old('mensagem') != '')
{{ old('mensagem') }}
@else
Preencha aqui a sua mensagem
@endif
</textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>

<div
    style="position: absolute; top:0px; lef:-20px; width:100%; background-color: rgba(189, 48, 48, 0.5); border-radius: 25px; ">
    <pre>
    {{ print_r($errors) }}
</pre>
