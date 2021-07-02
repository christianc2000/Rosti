@extends('layouts.app')

@section('template_title')
    {{ $plato->name ?? 'Show Plato' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Plato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('platos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cod Plato:</strong>
                            {{ $plato->cod_plato }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $plato->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $plato->precio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
