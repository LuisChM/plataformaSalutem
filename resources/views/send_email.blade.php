@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Envío de correos</h1>
@stop

@section('content')
    <div class="container mt-5">
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <form method="post" enctype="multipart/form-data" action="{{url('sendemail/send')}}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Escriba un tema inicial:</label>
     <input type="text" name="name" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Escriba el correo del cliente:</label>
     <input type="email" name="email" class="form-control" value="" multiple/>
    </div>

    <div class="form-group">
      <label>Adjunto:</label>
      <input type="file" name="archivo" class="form-control">
    </div>

    <div class="form-group">
     <label>Escriba el mensaje:</label>
     <textarea name="message" class="form-control"></textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="send" class="btn btn-primary" value="Enviar correo" />
    </div>
   </form>
   

  </div>
 
@endsection
@section('scripts')
@endsection
