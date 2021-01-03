@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Control costo / gasto</h1>
@stop

@section('content')
<div class="container mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form class="mt-4" enctype="multipart/form-data" action="{{route('facturas.update',$factura)}}"
                    method="POST">
                    @method('PATCH')
                    @include('administracion.facturas._form',['btnText'=>'Actualizar'])

                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
 
