@extends('adminlte::page')

@section('title', 'Crud Create')

@section('content_header')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Create Plato</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('platos.store') }}"  role="form" enctype="multipart/form-data">
                        @csrf

                        @include('plato.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
