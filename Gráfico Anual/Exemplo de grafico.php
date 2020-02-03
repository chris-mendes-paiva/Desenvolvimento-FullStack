<?php

    global $bd,$vars;

?>
    <!DOCTYPE html>
    <html dir="ltr" lang="pt-br">
            <head>
                <meta http-equiv="Content-Type" content="text/html;  charset=iso-8859-1" />
                <title>Grafico Alertas</title>
                
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css">
                <link rel="stylesheet" href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css">
                <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
                <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
                <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
                <script src="https://cdn.anychart.com/releases/v8/locales/pt-br.js"></script>
                
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
                <!-- Compiled and minified JavaScript -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            </head>
            <body>
                <nav>
                    <div class="nav-wrapper">
                        <a href="http://192.168.2.208:82/Intranet/svn_sys/christian/bylog/web/index.php?cod_item_menu=1&menu_acessado=1" class="brand-logo"><i class="material-icons" style="font-size: 50px; margin-left: 50px;">insert_chart</i>Teste - Balanço de Alertas</a>
                      <ul id="nav-mobile" class="right hide-on-med-and-down">
                      </ul>
                        
                    </div>
                </nav>
                <form action="" method="post">
                    <div class="form-group">      
                        <select class="form-control" id="exampleFormControlSelect1" name="exampleFormControlSelect1">
                            <option value="">Selecione o Ano</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>                        
                        </select>
                    </div>
                    <input type="hidden" name="page" value="...">
                    <input type="hidden" name="_show_pdf" value="1">
                    <div style="position: fixed; margin: auto;">
                        <input type="submit" value="Processar" name="Processar">
                    </div>

<?php 
       
if(isset($vars["Processar"]) && $vars["Processar"] != "")
{
    ?>
            <div id="container" style="width: 890px; height: 550px; margin: 0 auto;"></div>
            </form> 
            <script>  
            // meses falha de transmissão        
            var alerta = "<?php echo $alertaFalha[0]?>";
            var alerta1 = "<?php echo $alertaFalha[1]?>";
            var alerta2 = "<?php echo $alertaFalha[2]?>";
            var alerta3 = "<?php echo $alertaFalha[3]?>";
            var alerta4= "<?php echo $alertaFalha[4]?>";
            var alerta5 = "<?php echo $alertaFalha[5]?>";
            var alerta6 = "<?php echo $alertaFalha[6]?>";
            var alerta7 = "<?php echo $alertaFalha[7]?>";
            var alerta8 = "<?php echo $alertaFalha[8]?>";
            var alerta9 = "<?php echo $alertaFalha[9]?>";
            var alerta10 = "<?php echo $alertaFalha[10]?>";
            var alerta11 = "<?php echo $alertaFalha[11]?>";
           

            anychart.onDocumentReady(function () {

            var format ="EEEE, d' de 'MMMM' de 'yyyy HH:mm:ss";
            var locale = "pt-br";

            anychart.format.outputLocale("pt-br");
            anychart.format.outputDateTimeFormat("EEEE, d' de 'MMMM' de 'yyyy HH:mm:ss");

            var timeZoneOffset = new Date().getTimezoneOffset();

            var data = [
                ['2019-01', 0, 0, 0],
                ['2019-02', 0, 0, 0],
                ['2019-03', 0, 0, 0],
                ['2019-04', 0, 0, 0],
                ['2019-05', 0, 0, 0],
                ['2019-06', 0, 0, 0],
                ['2019-07', 0, 0, 0],
                ['2019-08', 0, 0, 0],
                ['2019-09', 0, 0, 0],
                ['2019-10', 0, 0, 0],
                ['2019-11', 0, 0, 0],
                ['2019-12', 0, 0, 0]
            ];

            var title = 'Alertas Registrados durante o Ano de <?php echo $ano?> \n';

            // create data set on our data, also we can put data directly to series
            var dataSet = anychart.data.set(data);
            // map data for the first series,take value from first column of data set
            var seriesData_1 = dataSet.mapAs({'x': 0, 'value': 1});
            // map data for the second series,take value from second column of data set
            var seriesData_2 = dataSet.mapAs({'x': 0, 'value': 2});
            // map data for the third series, take x from the zero column and value from the third column of data set
            var seriesData_3 = dataSet.mapAs({'x': 0, 'value': 3});

            var seriesData_4 = dataSet.mapAs({'x': 0, 'value': 4});
            // create line chart
            var chart = anychart.line();
            // turn on the crosshair and tune it
            chart.crosshair()
                .enabled(true)
                .yLabel(false)
                .xLabel(false)
                .yStroke(null);
            // set chart title text settings
            chart.title(title);
            // set chart padding
            chart.padding().top(10);
            // set yAxis title
            chart.yAxis().title('Alertas por mês');

            var seriesConfiguration = function (series, name) {
                series.name(name);
                series.hovered().markers()
                    .enabled(true)
                    .size(4);
            };
            // temp variable to store series instance
            var series;
            // setup first series
            series = chart.line(seriesData_1);
            series.stroke('#FFD700');
            seriesConfiguration(series, 'Falha de Transmissão');

            series = chart.line(seriesData_2);
            series.stroke('#FA8072');
            seriesConfiguration(series, 'Rompimento de lacre');

            series = chart.line(seriesData_3);
            series.stroke('#006400');
            seriesConfiguration(series, 'GPS Travado');

            series = chart.line(seriesData_4);
            series.stroke('#8B0000');
            seriesConfiguration(series, 'Alerta Botão Pânico');


            // Ativar a legenda
            chart.legend().enabled(true).padding([0, 0, 10, 0]);

            chart.xAxis().labels().format(function () {
                return anychart.format.dateTime(this.value, 'MMM', timeZoneOffset, locale);
            });
            chart.tooltip().titleFormat(function () {
                return anychart.format.dateTime(this.points[0].x, format, timeZoneOffset, locale);
            });

            //chart.tooltip().displayMode('union');

            // set container id for the chart
            chart.container('container');
            // initiate chart drawing
            chart.draw();
            });  
        </script>
    </body>
</html>
<?php
}
