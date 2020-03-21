@extends('templates.template')
<style>
    .caixa {
        width: 100px;
        height:100px;
        background-color:red;

    }

    .bg-cinza {
        background-color: #ccc;
    }


</style>
@section('content')

    <div class="sombra-externa top por-cima bg-white mb-3">
        <div class="row justify-content-center">
            <div class="p-3 col-6 d-flex align-items-center mb-2">
                <input placeholder="pesquise pelo nome" onkeyup="pesquisar()" class="form-control form-rounded" id="pesquisar" type="text">
            </div>
        </div>
    </div>

    @if (Session::has('success'))
        <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Success!</h4>
            <p>{{ Session::get('success') }}</p>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <div class="container mt-3">
        
        <!-- container de contato -->
        @foreach($contatos as $contato)
        <div  class="dados row justify-content-center mb-3">
            <div class="col-9 ">
                <div class="row">
                    <div class="col-8 container d-flex justify-content-between  
                                border rounded-pill p-2  bg-light sombra-contato ">
                        
                        <div class=" align-self-center ml-0"> 
                            <img src="/storage/{{ $contato->foto }}" width="100px" class="rounded-circle" alt=""> 
                        </div>
                        
                        <div class="d-flex flex-column align-self-center  justify-content-around pr-5">
                            <div class="mr-3 mb-2 nome">{{$contato->nome}}</div>
                            <div class="mr-3 mt-2 telefone">{{$contato->telefone}}</div>
                        </div>
    
                    </div>

                    <div class="pr-3 align-self-center ">
                        <a href="/contato/{{$contato->id}}" class="sombra-botao btn btn-block btn-primary rounded pt-3 pb-3">
                            ALTERAR
                        </a>
                    </div>
                </div>
            </div>
        </div>
       @endforeach
       <button class="btn btn-success top-botao sombra-contato" data-toggle="modal" data-target="#exampleModal">NOVO CONTATO</button>
    </div>
@endsection