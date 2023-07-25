<h1>fornecedor no blade</h1>


    @isset($fornecedores)
            @php $i = 0 @endphp
        @while (isset($fornecedores[$i]))

                Fornecedor:{{$fornecedores[$i]['nome']}}
                <br>
                Status: {{$fornecedores[$i]['status']}}
                <br>
                CNPJ: {{ $fornecedores[$i]['cnpj']?? 'Dado não preenchido'}}
                <br>
                TELEFONE: ({{ $fornecedores[$i]['ddd']?? 'Dado não preenchido'}}){{$fornecedores[$i]['telefone']?? ''}}
                <hr>    
            @php $i++ @endphp
        @endwhile
    @endisset
    {{--isset verifica se a variavel existe--}}
    {{--verifica se a variavel esta vazia: '', 0, 0.0, '0' null false array(), variavel sem valor--}}