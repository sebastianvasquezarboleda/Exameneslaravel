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
      <th scope="col">Precio</th>
      ¿
    </tr>
  </thead>

  <tbody>
   @foreach( $procedimientos as $paciente)
    <tr>
    <th scope="row">{{$paciente->id}}</th>
      <td>{{$procedimientos->Nombre}}</td>
      <td>{{$procedimientos->Precio}}</td>
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