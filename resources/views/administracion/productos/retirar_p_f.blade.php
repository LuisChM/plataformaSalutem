@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Retirar Producto</h1>
@stop

@section('content')

<div class="container mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">



                <form action="{{ url('retirar_producto/' . $producto->id) }}" method="post" style="margin:0 auto">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="nombre ">{{ 'Nombre de producto' }}</label>
                        <input class="form-control" type="text" disabled="disabled" name="nombre" id="nombre"
                            value="{{ $producto->nombre }}">

                        @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="nuevaCantidad">{{ 'Cantidad que desea retirar' }}</label>


                        <input class="form-control @error('cantidad') is-invalid @else border-0 @enderror"
                            placeholder="Ingrese la cantidad" type="number" name="nuevaCantidad" id="nuevaCantidad"
                            value="" min="1" max="{{  $producto->cantidad }}" pattern="^[0-9]+">
                        @error('cantidad')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>


                    <div class="d-flex justify-content-end mt-5">
                        <a href="{{ route('retirar_producto.index') }}" class="btn btn-primary mr-3">Volver</a>
                        <input type="submit" value="Retirar" class="btn btn-secondary text-white"
                            onclick="return confirm('Desea retirar?')">
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
