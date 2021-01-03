@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Control costo / gasto</h1>
@stop

@section('content')
<div class="container mt-5">
    <div class="responsive-table">
        @can('create_Facturas')   
        <a class="btn btn-primary mb-3" href="{{route('facturas.create')}}" role="button">Agregar nueva factura </a>
        @endcan
        
        <table class="table table-striped mt-4 text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre de la factura</th>
                    <th scope="col">Fecha de facturación</th>
                    <th scope="col">Total</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($factura as $facturas)
                <tr>
                    <td>{{$facturas->nombre}}</td>
                    <td>{{$facturas->fecha}}</td>
                    <td>{{$facturas->total}}</td>
                    <td>
                        <div class="d-flex justify-content-around">

                            {{-- seleccionar dato por id y editarlo --}}
                            <a href="{{route('facturas.edit',Crypt::encrypt($facturas->id))}}"><i class="far fa-eye text-green mr-3"></i></i></a>
                                   
                            @can('edit_Facturas')   
                            {{-- seleccionar dato por id y editarlo --}}
                            <a href="{{route('facturas.edit',Crypt::encrypt($facturas->id))}}"><i class="far fa-edit text-blue mr-3"></i></a>
                            @endcan

                            {{-- seleccionar dato por id y eliminarlo --}}

                            <form method="Post" action="{{route('facturas.destroy',$facturas)}}">
                                @csrf @method('delete')
                                <button class="bg-transparent border-0 delete-confirm" type="submit"><i class="far fa-trash-alt text-red"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>

        {{ $factura->links()}}


    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
 
