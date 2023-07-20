<h1>fornecedor no blade</h1>

@php
    
   /* if (condition) {
        # code...
    }elseif (condition) {
        # code...
    }else {
        # code...
    }
*/

//comparação do if para unless
    /*if (!<condition>) {
        # code...
    }*/

@endphp
@dd($fornecedores);
   
    {{--@unless executa se o resultado for false--}}


    {{--@if(count($fornecedores)> 0 && count($fornecedores)< 10)

    <h3> Existem alguns fornecedores cadastrados</h3> 

    @elseif(count($fornecedores)> 10)

     <h3> Existem varios fornecedores cadastrados</h3>    

     @else
     
     <h3> ainda não existe fornecedores cadastrados</h3> 
     @endif
--}}
