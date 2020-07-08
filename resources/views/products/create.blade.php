@extends('layouts.app')
@section('content')
<div class="container">

    @if (Auth::check())
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header text-center">CRUD Laravel 6 con Autenticación</h1>
        </div>
            <br>
            <hr>
            <hr>
            <br>
        <div class="col-md-8">
            <h2>Nuevo Producto
                <a class="btn btn-primary pull-right" href="{{ route('products.index')}}">Listado</a>
            </h2>
            {!! Form::open( ['route'=>'products.store']) !!}
            @include('products.fragment.form')
            {!! Form::close() !!}

        </div>
        <div class="col-md-4">
            @include('products.fragment.aside')
        </div>

    </div>
    @else
    <h1 class="page-header text-center">Debe iniciar sesion para continuar</h1>

    @endif
</div>
@endsection

