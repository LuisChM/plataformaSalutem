@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Facturas de Compras</h1>
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
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'descripcion', {
filebrowserUploadUrl: "{{route('facturas.store', ['_token' => csrf_token() ])}}",
filebrowserUploadMethod: 'form'
});
</script>

@stop

