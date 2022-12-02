
<h1>articulos</h1>

<?php $i=0?>

</table>
<table class="table">
    <thead>
      <tr>
        <th scope="col"># </th>
        <th scope="col">Id  </th>
        <th scope="col">Nombre   </th>
        <th scope="col">Stock</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
      <tr>
        <th scope="row">{{$i++}}</th>
        <td>{{$articulo->id}}</td>
        <td>{{$articulo->nombre}}</td>
        <td>{{$articulo->stock}}</td> 
      </tr>
      </tr>
      @endforeach
    </tbody>
  </table>



<br><br>
@include('articulos.crear');
<br><br>
@include('articulos.import');
<br>
<a href="articulos/exportar"><button>Exportar</button></a>
 