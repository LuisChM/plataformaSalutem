@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Control Cálculo</h1>
@stop

@section('content')
    <script type="text/javascript" src="JS/header.js"></script>
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" /> 
  
    
    <div class="iframe" style="position:fixed;top:62px; left:50; width:100%; height:100%;" >
        <iframe name="main" id="main" src="https://docs.google.com/spreadsheets/d/1hvvnnPiDkQ_FkOqX23GL69avewRt8tND7IvvyBLAlzQ/edit?usp=sharing"  
        frameborder="0" width="90%" height="90%" align="left">
        <FONT FACE=ARIAL SIZE=3 COLOR="RED">Your Browser doesn't Support Required Component.</FONT></iframe>
    </div>    
    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    
    @section('js')
    @stop