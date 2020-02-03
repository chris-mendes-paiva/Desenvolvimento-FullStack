<?php

/*
	+--------------------------------------------------------------------------------------------------------+
	|                                                                                                        |
	|	        Criador: Christian Mendes Paiva                                                              |
	|                                                                                                        |
	+--------------------------------------------------------------------------------------------------------+
*/

	
global $bd,$vars;

$queryCadCliente_destino = "SELECT cod_do_cliente, nome_do_cliente 
                                FROM  TABELA_CLIENTE where STATUS_CLIENTE != 1 ORDER BY nome_do_cliente ASC";
$result_destino = $bd->SQL_query_result($queryCadCliente_destino);

    ?>
    <!DOCTYPE html>
    <html dir="ltr" lang="pt-BR">
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>Testes Christian</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            </head>
            <body>             
                <nav>
                    <div class="nav-wrapper">
                        <a href="http://192.168.2.208:82/Intranet/svn_sys/christian/bylog/web/index.php?cod_item_menu=1&menu_acessado=1" class="brand-logo"><i class="material-icons" style="font-size: 50px; margin-left: 50px;">drive_eta</i>Marvel - Teste Chris</a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                        </ul>
                    </div>
                </nav>
                
                    <h1 style="text-align: center; font-size: 25pt;">Teste Teste Teste Teste</h1>
                    <hr>
                    <h2 style="text-align: center; font-size: 25pt;"></h2>
                    <div id="corpo" style="margin: auto; width: 30px; height: 50px;">
                    <form action="" method="post" class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1" name="exampleFormControlSelect1"style="width: 150pt; margin-left: -40pt; margin-top: -10pt">
                            <option value="">Selecione o Cliente</option>
                            <?php // esse laço é feito para exibir os clientes ativos para selecionar o cliente de destino
                                while($dados_cliente = $bd->SQL_fetch_assoc_result($result_destino))
                                {
                                    echo "<option value=".$dados_cliente['cod_do_cliente'].">".$dados_cliente['nome_do_cliente']."</option>";
                                }
                            ?>                       
                        </select>
                        <input type="hidden" name="page" value="processamentos/testes_christian">
                        <input type="hidden" name="_show_pdf" value="1">
                        <div style="position: fixed;margin-top: 10pt">
                            <input type="submit" value="Processar" name="Processar">
                        </div>
                        <br>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            
                    </form>
                </div>
                    
<?php 
       
if(isset($vars["Processar"]))
{
    ?>
    <div id="Pos" style="margin: auto; width: 1000px; height: 200px; margin-top: 80pt">
    <div id="barchart_material" style="width: 500px; height: 270px;"></div>
    <div id="piechart" style="width: 500px; height: 300px; margin-left: 450pt; margin-top: -220pt;"></div>
    
    <script>   
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['', ''],
                            ['----',11],
                            ['----', 7],
                            ['----',  13],
                            ['----', 9],
                            ['----',  7]
                        ]);

                        var options = {
                            title: 'Alertas Mensais'
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                        chart.draw(data, options);
                    }
                    </script>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['', 'Instalações', 'Desinstalações', 'Manutenções'],
                                ['2017', 1000, 400, 200],
                                ['2018', 1170, 460, 250],
                                ['2019', 660, 1120, 300],
                                ['2020', 1030, 540, 350]
                              ]);

                            var options = {
                                chart: {
                                    title: 'Acompanhamento Anual',
                                    subtitle: 'Instalações, Desinstalações e Manutenções: 2017-2020',
                                },
                                bars: 'horizontal' // Required for Material Bar Charts.
                            };

                            var chart = new google.charts.Bar(document.getElementById('barchart_material'));

                            chart.draw(data, google.charts.Bar.convertOptions(options));
                        }
                    </script>
    </div>
            </body>
    </html>
    
    <?php
}
