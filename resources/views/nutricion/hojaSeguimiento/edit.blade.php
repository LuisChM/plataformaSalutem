@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Hoja de Seguimiento</h1>
@stop

@section('content')
<div class="container mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">

                <form class="mt-4" action="{{route('seguimientos.update',$hojaSeguimiento)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    @include('nutricion.hojaSeguimiento._form',['btnText'=>'Guardar'])
                    <a class="btn btn-primary ml-3" href="{{ route('pacientes.edit', $hojaSeguimiento->paciente_id) }}" role="button">Volver</a>
                   
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