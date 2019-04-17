@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mb-3">
                <div class="card-header blue darken-4">
                    <h2 class="card-header-title text-white text-center">Conteúdos frequentes</h2>
                </div>
                <div class="card-body">
                    <canvas id="horizontalBar"></canvas>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header blue darken-4">
                    <h2 class="card-header-title text-white text-center">Tabela de conteúdos</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Conteúdo</th>
                            <th class="text-center" scope="col">2009</th>
                            <th class="text-center" scope="col">2010.1</th>
                            <th class="text-center" scope="col">2010.2</th>
                            <th class="text-center" scope="col">2011</th>
                            <th class="text-center" scope="col">2012</th>
                            <th class="text-center" scope="col">2013</th>
                            <th class="text-center" scope="col">2014</th>
                            <th class="text-center" scope="col">2015</th>
                            <th class="text-center" scope="col">2016.1</th>
                            <th class="text-center" scope="col">2014.2</th>
                            <th class="text-center" scope="col">2017</th>
                            <th class="text-center" scope="col">2018</th>
                            <th class="text-center" scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-center" scope="row">Termodinâmica -Termoquímica</th>
                            <td class="text-center">3</td>
                            <td class="text-center">4</td>
                            <td class="text-center">1</td>
                            <td class="text-center">2</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">2</td>
                            <td class="text-center">2</td>
                            <td class="text-center">3</td>
                            <td class="text-center">1</td>
                            <td class="text-center">3</td>
                            <td class="text-center">24</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Eletroquímica</th>
                            <td class="text-center">3</td>
                            <td class="text-center">4</td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">3</td>
                            <td class="text-center">2</td>
                            <td class="text-center">1</td>
                            <td class="text-center">2</td>
                            <td class="text-center">2</td>
                            <td class="text-center">2</td>
                            <td class="text-center">22</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Química orgânica</th>
                            <td class="text-center">2</td>
                            <td class="text-center">2</td>
                            <td class="text-center">2</td>
                            <td class="text-center">1</td>
                            <td class="text-center">5</td>
                            <td class="text-center">4</td>
                            <td class="text-center">4</td>
                            <td class="text-center">4</td>
                            <td class="text-center">5</td>
                            <td class="text-center">1</td>
                            <td class="text-center">2</td>
                            <td class="text-center">5</td>
                            <td class="text-center">37</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Química verde</th>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">5</td>
                            <td class="text-center"></td>
                            <td class="text-center">2</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">2</td>
                            <td class="text-center">3</td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center">15</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Soluções</th>
                            <td class="text-center">2</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center">2</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">6</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Gases</th>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">4</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Ciclos do carbono – nitrogênio</th>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">3</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Tipos de ligação</th>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center">3</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Radioatividade</th>
                            <td class="text-center">2</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center">7</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Propriedades coligativas</th>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center">4</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Reações químicas</th>
                            <td class="text-center"></td>
                            <td class="text-center">3</td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center">3</td>
                            <td class="text-center"></td>
                            <td class="text-center">2</td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center">12</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Análise imediata</th>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center">2</td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center">2</td>
                            <td class="text-center">3</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">4</td>
                            <td class="text-center">4</td>
                            <td class="text-center"></td>
                            <td class="text-center">19</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Química inorgânica</th>
                            <td class="text-center">2</td>
                            <td class="text-center">1</td>
                            <td class="text-center">2</td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center">2</td>
                            <td class="text-center">2</td>
                            <td class="text-center">2</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">12</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Propriedades químicas</th>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center">2</td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">2</td>
                            <td class="text-center">9</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Equilíbrio químico</th>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">4</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Estequiometria</th>
                            <td class="text-center"></td>
                            <td class="text-center">2</td>
                            <td class="text-center">2</td>
                            <td class="text-center">1</td>
                            <td class="text-center">2</td>
                            <td class="text-center">2</td>
                            <td class="text-center">3</td>
                            <td class="text-center">2</td>
                            <td class="text-center">2</td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center">17</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Interações intermoleculares</th>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Atomística</th>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">3</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Propriedades periódicas</th>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">1</td>
                            <td class="text-center">1</td>
                            <td class="text-center">2</td>
                        </tr>
                        <tr>
                            <th class="text-center" colspan="13" scope="row">Total de itens analisados</th>
                            <th class="text-center">204</th>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
            
            <div class="card mb-3">
                <div class="card-header blue darken-4">
                    <h2 class="card-header-title text-white text-center">Tabela de contextualização geral e interdisciplinaridade nos itens analisados</h2>
                    <hr class="white"/>
                    <p class="text-center card-text text-white">Q+B – Química e Biologia</p>
                    <p class="text-center card-text text-white">Q+F – Química e Física</p>
                    <p class="text-center card-text text-white">Q+B+F – Química, Biologia e Física</p>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">Provas analisadas</th>
                            <th class="text-center" scope="col">Itens contextualizados</th>
                            <th class="text-center" colspan="2" scope="col">Itens interdisciplinares (+1)</th>
                            <th class="text-center" scope="col">Itens interdisciplinares (+2)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-center" scope="row">2009</th>
                            <td class="text-center">15</td>
                            <td class="text-center">5 - Q+B</td>
                            <td class="text-center">3 - Q+F</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">2010.1</th>
                            <td class="text-center">15</td>
                            <td class="text-center">1 - Q+B</td>
                            <td class="text-center">1 - Q+F</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">2010.2</th>
                            <td class="text-center">12</td>
                            <td class="text-center">2 - Q+B</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">2011</th>
                            <td class="text-center">13</td>
                            <td class="text-center">8 - Q+B</td>
                            <td class="text-center">1 - Q+F</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">2012</th>
                            <td class="text-center">13</td>
                            <td class="text-center">2 - Q+B</td>
                            <td class="text-center"></td>
                            <td class="text-center">1 - Q+B+F</td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">2013</th>
                            <td class="text-center">14</td>
                            <td class="text-center">3 - Q+B</td>
                            <td class="text-center">1 - Q+F</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">2014</th>
                            <td class="text-center">15</td>
                            <td class="text-center">2 - Q+B</td>
                            <td class="text-center">1 - Q+F</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">2015</th>
                            <td class="text-center">8</td>
                            <td class="text-center">1 - Q+B</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">2016.1</th>
                            <td class="text-center">4</td>
                            <td class="text-center">2 - Q+B</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">2016.2</th>
                            <td class="text-center">5</td>
                            <td class="text-center">2 - Q+B</td>
                            <td class="text-center">2 - Q+F</td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">2017</th>
                            <td class="text-center">3</td>
                            <td class="text-center">3 - Q+B</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">2018</th>
                            <td class="text-center">3</td>
                            <td class="text-center">1 - Q+B</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                        <tr>
                            <th class="text-center" scope="row">Total</th>
                            <th class="text-center">120 itens contextualizados</th>
                            <th class="text-center">1 - Q+B</th>
                            <th class="text-center" colspan="2">41 itens interdisciplinares</th>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
  <!-- Start your project here-->
  <canvas id="horizontalBar"></canvas>
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src={{ asset('charts/js/jquery-3.3.1.min.js') }}></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src={{ asset('charts/js/popper.min.js') }}></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src={{ asset('charts/js/bootstrap.min.js') }}></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src={{ asset('charts/js/mdb.min.js') }}></script>
  
  <script>
    new Chart(document.getElementById("horizontalBar"), {
      "type": "horizontalBar",
      "data": {
        "labels": [
            "Química orgânica",
            "Termodinâmica -Termoquímica",
            "Eletroquímica",
            "Análise imediata",
            "Estequiometria",
            "Química verde",
            "Química inorgânica",
            "Reações químicas",
            "Propriedades químicas",
            "Radioatividade",
            "Soluções",
            "Equilíbrio químico",
            "Propriedades coligativas",
            "Gases",
            "Atomística",
            "Ciclos do carbono – nitrogênio",
            "Tipos de ligação",
            "Propriedades periódicas",
            "Interações intermoleculares"
        ],
        "datasets": [{
          "label": "Conteúdos mais frequentes - 2009 a 2018",
          "data": [37,24,22,19,17,15,12,12,9,7,6,4,4,4,3,3,3,2,1],
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
@endsection

</html>
