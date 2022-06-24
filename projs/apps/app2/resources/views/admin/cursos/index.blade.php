@extends('layout.site')
<!-- Extende um tema existente para utilização de suas variáveis -->
@section('titulo', 'Cursos')
<!-- Altera o valor de uma váriavel -->

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de cursos</h3>
        <div class="row">
            <div id="dados">
                @include('admin.cursos._table')
            </div>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>
            <a class="btn blue" onclick="update_table()">Atualiza Tabela</a>
        </div>
    </div>

@endsection
