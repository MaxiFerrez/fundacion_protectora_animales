<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fundacion animales</title>
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="bg-image" 
style="background-image: url('https://cdn.pixabay.com/photo/2021/06/01/07/05/paw-6300799_960_720.png');
       height: 100vh">
    {{-- <a href="{{route('login')}}"><button class="btn btn-danger">Login</button></a> --}}
    @include('seccion.nav')
    <header>
        <h1>Fundacion protectora de animales 2022</h1>
    </header>
    <div lass="bg-success p-2 text-dark bg-opacity-25">
    <section>   
        <img src="{{asset('perro.png')}}" alt="">
    </section>
    <section>
        @include('mensajes.create')
    </section>
</div>
    <footer>
        <p>San Juan Tec 2022</p>
    </footer>
</body>
</html>