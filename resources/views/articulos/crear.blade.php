<section>
<form action="{{ route('articulos.store')}}" method="POST">
@csrf
<input type="text" name="nombre" placeholder="Nombre Items">
<input type="number" name="stock" placeholder="Cantidad">
<input type="submit" value="Guardar">
</form>

</section>