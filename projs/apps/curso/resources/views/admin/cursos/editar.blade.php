@extends('layout.site') <!-- Extende um tema existente para utilização de suas variáveis -->
@section('titulo','Cursos') <!-- Altera o valor de uma váriavel -->

@section('conteudo')   
    <div class="container">
        <h3 class="center">Editando Curso</h3>
        <div class="row">
            <form action="{{ route('admin.cursos.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data"> <!-- Enctype é obrigatório quando for subir algum arquivo no sistema -->
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                @include('admin.cursos._form')
                <button class="btn deep-orange">Atualizar</button>
            </form>
        </div>
    </div>
@endsection