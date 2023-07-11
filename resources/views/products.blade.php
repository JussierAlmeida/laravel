@extends('layouts.main')

@section('title', 'produtos')

@section('content')

    <p>teste de produtos</p>   
    @if($busca != '')
    <p>o usuario esta buscando por: {{$busca}}</p>
    @endif

@endsection


