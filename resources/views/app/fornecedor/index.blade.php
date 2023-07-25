<h1>fornecedor no blade</h1>


    @isset($fornecedores)
        Fornecedor:{{$fornecedores[1]['nome']}}
        <br>
        Status: {{$fornecedores[1]['status']}}
        <br>
        CNPJ: {{ $fornecedores[1]['cnpj']?? 'Dado não preenchido'}}
    @endisset
    {{--isset verifica se a variavel existe--}}
    {{--verifica se a variavel esta vazia: '', 0, 0.0, '0' null false array(), variavel sem valor--}}