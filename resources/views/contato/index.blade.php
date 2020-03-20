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
    <div class="sombra-externa top por-cima bg-white pt-3 mb-3">
        <div class="row justify-content-center">
            <div class="p-3 col-6 d-flex align-items-center mb-2">
                <input class="form-control form-rounded" id="pesquisar" type="text">
                <button class="btn btn-primary">buscar</button>
            </div>
        </div>
    </div>


    <div class="container mt-3">
        
        <!-- container de contato -->
        <div class="row justify-content-center mb-3">
            <div class="col-9 ">
                <div class="row">
                    <div class="col-8 container d-flex justify-content-between  
                                border rounded-pill p-2  bg-light sombra-contato ">
                        
                        <div class=" align-self-center ml-0"> 
                            <div class="caixa rounded-circle"></div> 
                        </div>
                        
                        <div class="d-flex flex-column align-self-center  justify-content-around pr-5">
                            <div class="mr-3 mb-2 ">jose luiz amado batista</div>
                            <div class="mr-3 mt-2">62986353623</div>
                        </div>
    
                    </div>

                    <div class="pr-3 align-self-center ">
                        <button class="btn btn-block btn-primary rounded pt-3 pb-3">
                            ALTERAR
                        </button>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
@endsection