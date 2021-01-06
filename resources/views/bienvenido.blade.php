@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-4">
    <h2>Bienvenido: {{ Auth::user()->name }}</h2>
    <img src="/img/logo.svg" alt="arrow" style="width:50%" class="mx-auto d-block  logoCentro" >
  </div>

  @stop

  @section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
  @stop
  
  @section('js')
  @stop