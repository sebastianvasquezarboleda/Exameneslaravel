<!-- CSS only -->
@extends('layouts.app')
@section('content')

<center><h1>Lista de Pacientes</h1></center>

@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif

<a href="{{ url('paciente/create') }}" class="btn btn-success">Registrar Paciente</a>
<br><br>

<table class="table table-striped">

  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Tipo de documento</th>
      <th scope="col">Documento</th>
      <th scope="col">Genero</th>
      <th scope="col">Telefono</th>
      <th scope="col">Estado Civil</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Direccion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <tbody>
   @foreach( $pacientes as $paciente)
    <tr>
      <th scope="row">{{$paciente->id}}</th>
      <td>{{$paciente->Nombre}}</td>
      <td>{{$paciente->Apellido}}</td>
      <td>{{$paciente->TipoDocumento}}</td>
      <td>{{$paciente->Documento}}</td>
      <td>{{$paciente->Direccion}}</td>
      <td>{{$paciente->Telefono}}</td>
      <td>{{$paciente->EstadoCivil}}</td>
      <td>{{$paciente->FechaNacimiento}}</td>
      <td>{{$paciente->Direccion}}</td>
      <td>
        <a href="{{ url('/paciente/'.$paciente->id.'/edit') }}" class="btn btn-info">Editar</a>         

        <form action="{{ url('/paciente/'.$paciente->id) }}" method="POST">
        @csrf
        {{ method_field('DELETE') }}
            <input type='submit' onclick="return confirm('¿Quieres Borrar?')" class="btn btn-danger" value="Borrar">
        </form>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
@endsection