<h1>fornecedor no blade</h1>


    @isset($fornecedores)
           
        @forelse ($fornecedores as $indece => $fornecedor)
                iteração atual: {{$loop->iteration}}
                <br>
                Fornecedor:{{$fornecedor['nome']}}
                <br>
                Status: {{$fornecedor['status']}}
                <br>
                CNPJ: {{ $fornecedor['cnpj']?? 'Dado não preenchido'}}
                <br>
                TELEFONE: ({{ $fornecedor['ddd']?? 'Dado não preenchido'}}){{$fornecedor['telefone']?? ''}}
                <br>
                @if ($loop->first)
                 This is the first iteration
                    
                @endif
                <br>
                @if ($loop->last)
                  This is the last iteration
                    <br>
                    Total de registro: {{$loop->count}}
                @endif
                <hr> 
            
            @empty
                Não existe fornecedores cadastrados!!
        @endforelse
                    
    @endisset
   