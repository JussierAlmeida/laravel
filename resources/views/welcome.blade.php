@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Projeto de engreso desenvolvimento</h1>

<p>---------------boolean---------------</p>
@if(10>15)
<p>a condição é true</p>
@endif

<p>---------------$nome---------------</p>
<p>{{ $nome }}</p>

<p>---------------if---------------</p>
@if($nome =="pedro")
<p>o nome é pedro</p>
@elseif($nome == "jussier")
<p>o nome é {{$nome}} e tem {{$idade}} anos {{$profissao}}</p>
@else 
<p>o nome não é jussier</p>
@endif

<p>---------------for com if---------------</p>
@for($i = 0;$i < count($arr) ;$i++)
        <p>{{$arr[$i]}} - {{$i}}</p>
        @if($i == 0)
        <p>inicia</p>
        @elseif($i == 1)
        <p>primeiro</p>
        @elseif($i == 2)
        <p>segundo</p>
        @elseif($i == 3)
        <p>terceiro</p>
        @elseif($i == 4)
        <p>quarto</p>
        @else($i == 5)
        <p>quinto</p>
        @endif
@endfor

        <p>---------------foreach---------------</p>
@foreach($nomes as $nome)
        <p>{{ $loop->index }}</p>
                <p>{{$nome}}</p>
@endforeach
        <p>---------------php---------------</p>
@php
        $nome ="joão";
        echo $nome;
@endphp

@endsection