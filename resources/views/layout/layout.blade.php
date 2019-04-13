<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset("css/app.css")}} type="text/css">
    <link rel="stylesheet" href={{asset("css/estilos.css")}} type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>@yield("title")</title>
</head>
<body>
<header class="bg-warning">
    <ul class="nav justify-content-center">
        <li class="nav-item"><a href="#!" class="nav-link text-dark">Home</a></li>
        <li class="nav-item"><a href="#!" class="nav-link text-dark">Post</a></li>
        <li class="nav-item"><a href={{url("categorias")}} class="nav-link text-dark">Categorias</a></li>
        <li class="nav-item"><a href={{url("nacionalidades")}} class="nav-link text-dark">Nacionalidades</a></li>
        <li class="nav-item"><a href={{url("empleados")}} class="nav-link text-dark">Empleados</a></li>
        <li class="nav-item"><a href="#!" class="nav-link text-dark">Usuarios</a></li>
    </ul>

</header>
<section class="container">
    @yield("content")
    <br> <br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br> <br> <br><br> <br> <br> <br>
</section>
<footer class="bg-warning text-white">
    <div class="container">
        <div class="row font-weight-bold">
            <div class="col-12 col-md-6 text-right font-weight-bold text-dark">powered by{{'@'}}Beto</div>
            <div class="col-12 col-md-6 text-dark text-left">
                <span><i class="fab fa-facebook-f "></i></span>
                <span><i class="fab fa-twitter"></i></span>
                <span><i class="fab fa-google"></i></span>
                <span><i class="fab fa-github"></i></span>
            </div>

        </div>
    </div>

</footer>
</body>
</html>
