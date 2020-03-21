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
    <div class="container sombra-contato mt-5 p-4">
        <div class="row flex-column align-items-center ">
            <div class="col-7 ">
                <form action="">
                    <label for="nome">Nome:</label>
                    <input name="nome" class="form-control"  type="text">
                    <label for="telefone">telefone:</label>
                    <input name="telefone" class="form-control" type="number">

                    <div class="row justify-content-center mt-5">
                        <input class="btn btn-success " value="Salvar Alterações" type="submit">    
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection