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
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th width="20px">ID</th>
                        <th>Nombre del Producto</th>
                        <th colspan="3">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $products as $product )
                    <tr>
                        <td>{{$product->id}}</td>
                        <td><strong>{{$product->name}}</strong>
                            {{$product->short}}
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{ route('products.show', $product->id)}}">Ver</a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('products.edit', $product->id)}}">Editar</a>

                        </td>
                        <td>Borrar</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            {!! $products->render() !!}
        </div>
        <div class="col-md-4">

        </div>

    </div>
</div>
@endsection

