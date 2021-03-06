@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        Usted ha iniciado sesion correctamente
                        <a href="{{ route('products.index') }}">Ir Al Listado de Productos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
