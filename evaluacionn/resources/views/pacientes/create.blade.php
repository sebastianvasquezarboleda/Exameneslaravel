<!-- CSS only -->

@extends('layouts.app')
@section('content')
<div class="container">

<center><h1>Registro de Pacientes</h1></center>

<form action="{{ url('/paciente') }}" method="POST">
@csrf
@include('pacientes.form',['modo'=>'Crear'])
</form>
<div>    
@endsection