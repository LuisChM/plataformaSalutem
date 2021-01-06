@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Pacientes</h1>
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
                <button type="submit" class="btn btn-primary mb-2">Buscasssr</button>
            </form>
        </div>
            {{-- /buscar paciente --}}

            <a class="btn btn-primary" href="{{ route('pacientes.create') }}" role="button">Agregar nuevo paciente </a>
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
                                    <a href="{{ url('paciente/'.$pacientes->id.'/edit' )}}"><img src="/img/seleccionar.svg"
                                            class="iconoAccion" alt="seleccionar"></a>

                                    {{-- seleccionar dato por id y eliminarlo
                                    --}}
                                    <a href="{{ url('paciente/'.$pacientes->id) }}"><img src="/img/check.svg"
                                        class="iconoAccion" alt="seleccionar"></a>

                                
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $paciente->links() }}

        </div>

    </div>

    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    
    @section('js')
    @stop