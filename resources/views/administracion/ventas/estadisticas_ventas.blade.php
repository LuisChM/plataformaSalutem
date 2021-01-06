@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>comidas más Vendidas</h1>
@stop

@section('content')

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ventas', 'Semana'],
          @foreach ($venta as $ventas)
            ['{{$ventas-> nombre_comida}}',{{$ventas->cantidad}}],
          @endforeach
        ]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>

    <div id="piechart_3d" style="width: 1110px; height: 600px;"></div>

  </body>
</html>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop