@extends('templates.template')
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

            <!-- Modal -->
        <div 
        class="modal fade" 
        id="exampleModal" 
        tabindex="-1" 
        role="dialog" 
        aria-labelledby="exampleModalLabel" 
        aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastrar Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="storeContato" enctype="multipart/form-data" action="/contato" method="POST">
                @csrf
                <div class="modal-body">
                        <div class="container">
                            <div class="row flex-column align-items-center ">
                                <div class="col-12">
                                    <div class="row">

                                        <div class="col-5 ">
                                            <div class="row ">
                                                <!-- input da imagem -->
                                                <img src=""
                                                class="rounded-circle"
                                                height="100px"  
                                                width="100px" id="fotoModal">

                                                <input onchange="lerURL(this,'fotoModal');" type="file" class="form-control-file" name="foto" id="image">
                                            </div>
                                        </div>

                                        <div class="col-7">
                                            <!-- input do telefone e do nome -->
                                            <label for="nome">Nome:</label>
                                            <input name="nome" id="nome" class="form-control"  type="text">
                                            <div id="nome-vazio" class="desaparecer">
                                                <small class="text-danger">O nome não pode ser vazio!</small>
                                            </div>
                                            <label for="telefone">telefone:</label>
                                            <input name="telefone" id="telefone" class="form-control" type="number">
                                            <div id="telefone-vazio" class="desaparecer">
                                                <small class="text-danger">O telefone não pode ser vazio!</small>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <!-- submeter -->
                    <button id='' type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <a href="#" onclick="guardarContato()" class="btn btn-success">Salvar Contato</a>
                </div>
                </form>
                </div>
            </div>
        </div>
    
    
@endsection