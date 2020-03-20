<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ url('assets\bootstrap\css\bootstrap.min.css') }}">

    <!--fontawesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


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
            right: 15px;
            z-index: 100;
        }

        .por-cima {
            z-index: 10 !important;
        }
    </style>
</head>
<body>
    <button class="btn btn-success top-botao sombra-contato">NOVO CONTATO</button>
    <nav class="bg-white por-cima sticky-top sombra-externa nav justify-content-center">    
        <a class="navbar-brand" href="/">

            <img src="{{ url('assets/imagens/agenda-vetor.png') }}" width="70px" class="" alt="">
        </a>
    </nav>
@yield('content')
</body>
</html>