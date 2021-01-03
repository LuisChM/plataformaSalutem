@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Control costo / gasto</h1>
@stop

@section('content')
<div class="container mt-5">
    <div class="responsive-table">
        <a class="btn btn-primary" href="{{route('roles.create')}}" role="button">Agregar nueva rol </a>
        <table class="table table-striped mt-4 text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Rol</th>
                    <th scope="col">Permisos Asignados</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($role as $roles)
                <tr>
                    <td>{{$roles->name}}</td>
                    <td>{{$roles->getPermissionNames()->implode(', ')}}</td>
                    <td>
                        <div class="d-flex justify-content-around">
                             {{-- seleccionar dato por id y editarlo --}}
                             <a href="{{route('roles.edit', $roles)}}"><i class="far fa-eye text-green mr-3"></i></i></a>
                                   
                             {{-- seleccionar dato por id y editarlo --}}
                             <a href="{{route('roles.edit',$roles)}}"><i class="far fa-edit text-blue mr-3"></i></a>
 
                             {{-- seleccionar dato por id y eliminarlo --}}
 
                             <form method="Post" action="{{route('roles.destroy',$roles)}}">
                                 @csrf @method('delete')
                                 <button class="bg-transparent border-0 delete-confirm" type="submit"><i class="far fa-trash-alt text-red"></i></button>
                             </form>
                        </div>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
        {{ $role->links()}}



    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
 