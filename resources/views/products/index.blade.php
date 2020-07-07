@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header text-center">CRUD Laravel 6 con Autenticación</h1>
        </div>
<br>
<hr>
<hr>
<br>
        <div class="col-md-8">
            <h2>Listado de Productos
                <a href="{{ route('products.create') }}" class="btn btn-primary pull-right">Nuevo</a>
            </h2>

        </div>
        <div class="col-md-4">

        </div>

    </div>
</div>
@endsection

