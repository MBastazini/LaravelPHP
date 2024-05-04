@extends('layout.site')
@section('titulo', 'CursosEditar')
@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Curso</h3>
        <div class="row">
            <form action="{{route('admin.cursos.atualizar', $linha->id )}}" method="post" 
            enctype="multipart/form-data" >
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                @include('admin.cursos._form')
                <button class="btn-deep-orange">Salvar</button>
            </form>
        </div>
    </div>
@endsection