<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ url('assets\bootstrap\css\bootstrap.min.css') }}">

    <!-- validações -->
    <script src="{{ url('assets\javaScript\validar.js') }}"></script>
    
    <!-- validações -->
    <link rel="stylesheet" href="{{ url('assets\css\estilo.css') }}">

    <title>Agenda Smart</title>
</head>
<body>

    <nav class="bg-white por-cima sticky-top sombra-externa nav justify-content-center">    
        <a class="navbar-brand" href="/">
            <img src="{{ url('assets/imagens/agenda-vetor.png') }}" width="60px" class="" alt="">
        </a>
    </nav>
    @yield('content')
            
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>