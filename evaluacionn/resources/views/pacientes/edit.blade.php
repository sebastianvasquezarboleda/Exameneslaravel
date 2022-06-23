<!-- CSS only -->

@extends('layouts.app')
@section('content')
<div class="container">

<center><h1>Edición de Pacientes</h1></center>

<form action="{{ url('/paciente/'.$paciente->id) }}" method="POST">
@csrf
{{ method_field('PATCH') }}
@include('pacientes.form',['modo'=>'Editar'])
</form>
<div>
@endsection