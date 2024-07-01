<h3>fornecededor

</h3>

@php
    

@endphp



@isset($fornecedores)
    
    @foreach($fornecedores as $indices => $fornecedor)
    Fornecedor:{{$fornecedor['nome']}}
    <br>
    Status: {{$fornecedor['status']}}
    <br>
    CNPJ: {{$fornecedor['cnpj']}}
    <br>
    Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{$fornecedor['telefone'] ?? ''}}
    @switch($fornecedor['ddd'])
        @case ('11')
            são Paulo -SP
            @break
        @case ('32')
            juiz de fora - MG
            @break
        @case ('85')
            Fortaleza - CE
            @break
        @default
            Estado não identificado
    @endswitch
    <hr>
@endforeach
@endisset

<br>
