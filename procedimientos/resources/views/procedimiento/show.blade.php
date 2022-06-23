@extends('layouts.app')

@section('template_title')
    {{ $procedimiento->name ?? 'Show Procedimiento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Procedimiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('procedimiento.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $procedimiento->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $procedimiento->Precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
