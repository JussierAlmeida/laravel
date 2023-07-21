<h1>fornecedor no blade</h1>


    @isset($fornecedores)
        Fornecedor:{{$fornecedores[0]['nome']}}
        <br>
        Status: {{$fornecedores[0]['status']}}
        <br>
        @isset($fornecedores[0]['cnpj'])
            cnpj: {{$fornecedores[0]['cnpj']}}  
            @empty($fornecedores[0]['cnpj'])
                - Vazio
            @endempty
        @endisset
        
    @endisset
    {{--isset verifica se a variavel existe--}}
    {{--verifica se a variavel esta vazia: '', 0, 0.0, '0' null false array(), variavel sem valor--}}