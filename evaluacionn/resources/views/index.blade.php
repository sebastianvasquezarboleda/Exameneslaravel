
<br><br>
<a href="{{ url('/procedimientos/create') }}" class="btn btn-success">Registrar Procedimiento</a>
<table class="table table-striped">

  <thead>
  <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <tbody>
   @foreach( $procedimientos as $procedimientos)
    <tr>
    <th scope="row">{{$procedimientos->id}}</th>
      <td>{{$procedimientos->Nombre}}</td>
      <td>{{$procedimientos->Precio}}</td>
      
    </tr>
   @endforeach
  </tbody>
</table>