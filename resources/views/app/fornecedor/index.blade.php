<h1>fornecedor no blade</h1>


    @isset($fornecedores)
        @for ($i = 0; isset($fornecedores[$i]); $i++)

            Fornecedor:{{$fornecedores[$i]['nome']}}
            <br>
            Status: {{$fornecedores[$i]['status']}}
            <br>
            CNPJ: {{ $fornecedores[$i]['cnpj']?? 'Dado não preenchido'}}
            <br>
            TELEFONE: ({{ $fornecedores[$i]['ddd']?? 'Dado não preenchido'}}){{$fornecedores[$i]['telefone']?? ''}}
            <hr>    
            
        @endfor
    @endisset
    {{--isset verifica se a variavel existe--}}
    {{--verifica se a variavel esta vazia: '', 0, 0.0, '0' null false array(), variavel sem valor--}}