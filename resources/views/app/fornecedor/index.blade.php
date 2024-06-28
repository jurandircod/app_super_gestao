<h3>fornecededor

</h3>

@php
    

@endphp



@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Existem alguns fornecedores</h3>
@elseif(count($fornecedores) > 10)
    <h3>existem varios fornecedores cadastrados</h3>
@else
    <h3>não existe fornecedores cadastrados</h3>
@endif