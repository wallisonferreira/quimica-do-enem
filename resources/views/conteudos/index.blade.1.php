@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Conteúdos frequentes</div>

                <div class="card-body">
                    <canvas id="horizontalBar"></canvas>
                </div>
            </div>
        </div>
        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="{{ asset('charts/js/jquery-3.3.1.min.js') }}"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{ asset('charts/js/popper.min.js') }}"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{ asset('charts/js/bootstrap.min.js') }}"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{ asset('charts/js/mdb.min.js') }}"></script>
        <script>
            new Chart(document.getElementById("horizontalBar"), {
            "type": "horizontalBar",
            "data": {
                "labels": ["Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Grey"],
                "datasets": [{
                "label": "My First Dataset",
                "data": [22, 33, 55, 12, 86, 23, 14],
                "fill": false,
                "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
                    "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)",
                    "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
                ],
                "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
                    "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"
                ],
                "borderWidth": 1
                }]
            },
            "options": {
                "scales": {
                "xAxes": [{
                    "ticks": {
                    "beginAtZero": true
                    }
                }]
                }
            }
            });

        </script>
    </div>
@endsection
