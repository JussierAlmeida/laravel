@extends('layouts.main')

@section('title', ' produto')

@section('content')

@if($id != null)
<p>exibindo product id: {{$id}}</p>
@endif


@endsection