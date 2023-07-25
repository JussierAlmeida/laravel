<h1>fornecedor no blade</h1>


    @isset($fornecedores)
           
    @foreach ($fornecedores as $indece => $fornecedor)
           
            Fornecedor:{{$fornecedor['nome']}}
            <br>
            Status: {{$fornecedor['status']}}
            <br>
             CNPJ: {{ $fornecedor['cnpj']?? 'Dado não preenchido'}}
            <br>
            TELEFONE: ({{ $fornecedor['ddd']?? 'Dado não preenchido'}}){{$fornecedor['telefone']?? ''}}
            <hr>    
    @endforeach     
    @endisset
   