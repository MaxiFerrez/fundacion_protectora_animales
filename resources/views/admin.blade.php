
@auth

<h1>Bienvenido Admin</h1>


<a href="{{route('articulos.index')}}"><button class="btn btn-danger">Articulos</button></a>
<a href="{{route('mensajes.index')}}"><button class="btn btn-danger">Mensajes</button></a>

<form action=" {{ route('logout')}}" method="POST">
    @csrf
    <button>Salir</button>
</form>    

@endauth
