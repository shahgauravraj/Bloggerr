@extends('layouts.app')

@section('content')
    <h1 style="margin: 2rem 0 2rem 0;">Users data statistics</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">USER ID</th>
            <th scope="col">NAME</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{ $user->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <div class="container" style="margin-top: 3rem; padding: 2rem; background-color: #afd4d8;">
        <div class="row">
          <div class="col-sm">
            <div id="piechart" style="width: 500px; height: 300px;"></div>
          </div>
          <div class="col-sm">
            <div id="barchart" style="width: 500px; height: 300px;"></div>
          </div>
        </div>
    </div>
    <hr>
    
@endsection

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Posts per user'],
          ['User ID {{ $count[0]->user_id }}', {{$count[0]->total_count}}],
          ['User ID {{ $count[1]->user_id }}',  {{$count[1]->total_count}}],
          ['User ID {{ $count[2]->user_id }}',  {{$count[2]->total_count}}],
        ]);
        
        var options = {
          title: 'Posts per user'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);

        var chart = new google.visualization.BarChart(document.getElementById('barchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    
  </body>
</html>