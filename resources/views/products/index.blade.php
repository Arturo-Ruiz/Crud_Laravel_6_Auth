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
    @if (auth()->user()->name == 'Arturo')
    <h1>{{auth()->user()->name}}</h1>
    @endif



            <h2>Listado de Productos
                <a href="{{ route('products.create') }}" class="btn btn-primary pull-right">Nuevo</a>
            </h2>
            @include('products.fragment.info')
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
                        <td>
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            {!! $products->render() !!}
        </div>
        <div class="col-md-4">
            @include('products.fragment.aside')
        </div>

    </div>
    @else
    <h1 class="text-center">Deber de Iniciar sesion para continuar</h1>
    @endif

</div>
@endsection

