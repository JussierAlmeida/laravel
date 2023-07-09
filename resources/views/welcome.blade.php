<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    <link rel="stylesheet" href="/css/styles.css">
    <script>    src="/js/scripts.js"    </script>
    </head>
    <body>
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
<!--  esse conpentario aparece no html -->
{{-- esse comentario não aparece --}}
    </body>
</html>