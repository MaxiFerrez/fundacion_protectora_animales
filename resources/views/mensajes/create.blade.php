<form action="{{route('mensajes.store')}}" method="POST" class="form form-mensajes">
    @csrf

    <div>
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control"name="nombre" id="nombre">
    </div>
    <div>
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control"name="email" id="email">
    </div>
    <div>
        <label for="telefono" class="form-label">Telefono</label>
        <input type="number" class="form-control"name="telefono" id="telefono">
    </div>
    <br>
    <div>
        <textarea name="mensaje"  class="form-control" id="mensaje" cols="30" rows="10">
            Escriba su consulta 
        </textarea>
    </div>
    <input type="submit" class="btn btn-danger" value="Enviar">
</form>