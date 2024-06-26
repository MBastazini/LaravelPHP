@extends('layout.site')
@section('titulo', 'CursosAdicionar')
@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Curso</h3>
        <div class="row">
            <form action="{{route('admin.cursos.salvar')}}" method="post" 
            enctype="multipart/form-data" ></form>
            {{ csrf_field() }}

            @include('admin.cursos._form')
            <button class="btn-deep-orange">Salvar</button>
        </div>
    </div>
@endsection