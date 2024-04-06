@extends('layout.site')



@section('titulo', 'Calculo')

@section('conteudo')
@section('conteudo')
<section>
    <h1 class="text-2xl font-bold text-blue-500">IMC</h1>
        <div class="mt-4">
            @foreach ($resultado as $resp)
                <div class="bg-gray-200 p-4 mb-4 border border-gray-400 rounded shadow-md">
                    <p class="text-gray-700 text-lg">Seu peso é: {{ $resp->peso }}</p>
                    <p class="text-gray-700">Sua altura é:{{ $resp->altura }}</p>
                    <h2>Seu IMC é: {{$resp -> imc}}</h2>
                    <h1>Sua classificação é: {{$resp -> classificacao}}
                </div>
            @endforeach
        </div>
</section>

@endsection