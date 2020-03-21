<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ url('assets\bootstrap\css\bootstrap.min.css') }}">

    <script src="{{ url('assets\javaScript\validar.js') }}"></script>


    <title>Agenda Smart</title>


    <style>
        .sombra-externa{
            -webkit-box-shadow: -1px 8px 14px -12px rgba(0,0,0,0.75);
            -moz-box-shadow: -1px 8px 14px -12px rgba(0,0,0,0.75);
            box-shadow: -1px 8px 14px -12px rgba(0,0,0,0.75);
        }

        .sombra-contato {
            -webkit-box-shadow: 0px 4px 20px -11px rgba(0,0,0,1);
            -moz-box-shadow: 0px 4px 20px -11px rgba(0,0,0,1);
            box-shadow: 0px 4px 20px -11px rgba(0,0,0,1);
        }


        .top { 
            position: sticky;
            top: 80px;
            z-index: 1;
        }

        .top-botao { 
            position: fixed;
            float: bottom;
            bottom: 15px;
            right: 25px;
            z-index: 100;
        }

        .por-cima {
            z-index: 10 !important;
        }
    </style>
</head>
<body>
    <button class="btn btn-success top-botao sombra-contato" data-toggle="modal" data-target="#exampleModal">NOVO CONTATO</button>
    <nav class="bg-white por-cima sticky-top sombra-externa nav justify-content-center">    
        <a class="navbar-brand" href="/">
            <img src="{{ url('assets/imagens/agenda-vetor.png') }}" width="70px" class="" alt="">
        </a>
    </nav>
    @yield('content')
            
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <div class="col-7 ">

                                    <label for="nome">Nome:</label>
                                    <input name="nome" class="form-control"  type="text">
                                    <label for="telefone">telefone:</label>
                                    <input name="telefone" class="form-control" type="number">
                                    <label for="imagem">imagem:</label>
                                    <input type="file" class="form-control-file" name="foto" id="image">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <input type="submit" onclick="guardarContato()" value="Salvar Contato" data-dismiss="modal" class="btn btn-success">
            </div>
            </form>
            </div>
        </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>