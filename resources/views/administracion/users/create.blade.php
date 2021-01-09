@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Usuarios</h1>
@stop

@section('content')
<div class="container mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">

                <form class="mt-4" action="{{route('users.store')}}" method="POST">
                    @include('administracion.users._form',['btnText'=>'Guardar'])

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
