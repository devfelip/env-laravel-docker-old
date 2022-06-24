@extends('layout.site') <!-- Extende um tema existente para utilização de suas variáveis -->
@section('titulo','Contatos') <!-- Altera o valor de uma váriavel -->

@section('conteudo')   
    <h3>Essa é a view Index de Contato</h3>

    @foreach ($contatos as $contato) <!-- Acessando dados retornados do array contatos pelo controller -->
    <p>{{ $contato->nome }}</p>
    <p>{{ $contato->tel }}</p>
    @endforeach
@endsection