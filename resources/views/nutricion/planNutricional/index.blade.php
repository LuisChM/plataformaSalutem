@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Plan Nutricional</h1>
@stop

@section('content')
<div class="container mt-5">
    <div class="responsive-table">

        {{-- buscar paciente --}}
        <div class="d-flex justify-content-end align-content-center">
            <form class="form-inline">
                <div class="form-group mx-sm-3 m-2">
                    <input type="search" class="form-control searchInput" name="buscarpor" placeholder="Buscar paciente" >
            </div>
            <button type="submit" class="btn btn-primary mb-2">Buscar</button>
        </form>
    </div>
        {{-- /buscar paciente --}}
        <a class="btn btn-primary" href="{{ route('planNutricionals.create') }}" role="button">Agregar nuevo plan nutricional </a>
        <table class="table table-striped mt-4 text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acción</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($paciente as $pacientes)
                    <tr>
                        <td>{{ $pacientes->nombre }}</td>
                        <td>
                            <div class="d-flex justify-content-around">
                                {{-- seleccionar dato por id y editarlo
                                --}}
                                <a href="{{ url('planNutricional/'.$pacientes->id.'/edit' )}}"><img src="/img/seleccionar.svg"
                                        class="iconoAccion" alt="seleccionar"></a>

                                        {{-- seleccionar dato por id y mostrarlo
                                --}}
                                <a href="{{ url('planNutricional/'.$pacientes->id) }}"><img src="/img/check.svg"
                                    class="iconoAccion" alt="seleccionar"></a>
   
                                    {{-- seleccionar dato por id y eliminarlo
                                --}}
                                <form method="Post" action="{{route('planNutricionals.destroy',$pacientes)}}">
                                    @csrf @method('delete')
                                    <button class="bg-transparent border-0 delete-confirm" type="submit"><img src="/img/basura.svg" class="iconoAccion"
                                        alt="eliminar"></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                
                @endforeach
            </tbody>

        </table>
        {{ $paciente->links() }}

    </div>
    
    </form>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop