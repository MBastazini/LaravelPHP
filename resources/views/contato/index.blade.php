<h2>Esta é a visão contatos</h2>

@foreach ($contatos as $contato)
    <p>{{ $contato['nome'] }}</p>
    <p>{{ $contato['cel'] }}</p>
@endforeach

@for($a = 0; $a < 2; $a++)
    <p>3 é menor que 2</p>
@endfor