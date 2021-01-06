@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Administración de Comidas</h1>
@stop

@section('content')
<div class="container mt-5">


<div>
    <a href="{{route('ventas.create')}}" class="btn btn-primary mb-2">Agregar nueva Comida</a>

</div>

    <div class="responsive-table">
        <table class="table table-striped mt-4 text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre Comida </th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>


                    <th scope="col">Acción</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($venta as $ventas)

                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$ventas->nombre_comida}}</td>
                    <td>{{$ventas->descripcion}}</td>
                    <td>₡{{$ventas->precio}}</td>

                    <td>

                        <form method="POST" action="{{url('ventas/'.$ventas->id)}}">
                          {{ csrf_field() }}
                          {{method_field('DELETE')}}

                           <a href="{{url('ventas/'.$ventas->id.'/edit')}}"><img src="/img/seleccionar.svg"
                              class="iconoAccion" alt="seleccionar"></a>

                              <form method="Post" action="{{route('ventas.destroy',$venta)}}">
                                  @csrf @method('delete')
                                  <button class="bg-transparent border-0" type="submit" onclick="return confirm('Esta seguro de eliminar el dato');"><img
                                      src="/img/basura.svg" class="iconoAccion" alt="eliminar"></button>
                              </form>
                      </form>

                      </td>

                 @endforeach

            </tbody>
        </table>

    </div>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop