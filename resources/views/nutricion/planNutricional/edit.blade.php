@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Plan Nutricional</h1>
@stop

@section('content')
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <form class="mt-4" action="{{route('planNutricionals.update', $planNutricional)}}"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    @include('nutricion.planNutricional._form',['btnText'=>'Guardar'])

                </form>
            </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop