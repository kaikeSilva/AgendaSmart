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
    <div class="container sombra-contato rounded mt-5 p-4">
        <div class="row flex-column align-items-center ">
            <div class="col-12 ">
                <!-- formulario para atualizar cadastro -->
                <form id="fomulario-atualizar" enctype="multipart/form-data"  action="/contato/{{ $contato->id }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="container">
                        <div class="row">
                            <div class="col-5">
                                <div class="row justify-content-center mt-5">
                                    
                                    <img src="/storage/{{ $contato->foto }}"
                                    class="rounded-circle"
                                    height="100px"  
                                    width="100px" id="foto">

                                    <input 
                                    type='file' 
                                    class="form-control-file mt-3" 
                                    name='foto'
                                    onchange="lerURL(this,'foto');" />

                                </div>
                            </div>

                            <div class="col-7">
                                <div class="row justify-contetn-center">
                                    <label for="nome">Nome:</label>
                                    <input id="nome" name="nome" value="{{ $contato->nome }}"  class="form-control"  type="text">
                                    <div id="nome-vazio" class="desaparecer">
                                        <small class="text-danger">O nome não pode ser vazio!</small>
                                    </div>
                                    <div>
                                        <label class="" for="telefone">telefone:</label>
                                        <input name="telefone" id="telefone" value="{{ $contato->telefone }}" class="form-control" type="number">
                                    </div>
                                    <div id="telefone-vazio" class="desaparecer">
                                        <small class="text-danger">O telefone não pode ser vazio!</small>
                                    </div>

                                    <div class="col-12">
                                        <div class="row justify-content-center p-2">
                                            <a class="btn btn-success" onclick="atualizarContato()" href="#">atualizar dados</a>
                                        </div>   
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> 
                    <input hidden id="submeter" type="submit">
                </form>
                
                
                <!-- formulario para deletar cadastro -->
                <div class="row flex-row-reverse justify-content-around mt-5">

                    <div class="col-10 ml-2 border rounded border-danger p-3">
                        <div class="row justify-content-around align-items-center">
                            <div class="h5 text-danger">PERIGO!!!</div>
                            <form action="/contato/{{ $contato->id }}" method="POST" >
                                @method('delete')
                                @csrf
                                    <input class="btn btn-danger " value="Deletar contato" type="submit">  
                            </form>  
                        </div>
                    </div>
                </div>                   

            </div>
        </div>
    </div>
@endsection