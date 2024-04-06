@extends('layout.site')



@section('titulo', 'Contatos')

@section('conteudo')
<section>
    <h1 class="text-2xl font-bold text-blue-500">Contatos</h1>
        <div class="mt-4">
            @foreach ($contatos as $contato)
                <div class="bg-gray-200 p-4 mb-4 border border-gray-400 rounded shadow-md">
                    <p class="text-gray-700 text-lg">{{ $contato->tema }}</p>
                    <p class="text-gray-700">{{ $contato->titulo }}</p>
                </div>
            @endforeach
        </div>
</section>
    

@endsection
