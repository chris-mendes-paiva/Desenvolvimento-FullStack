<?php
    global  $bd,$vars ;
?>
    <!DOCTYPE html>
    <html  dir="ltr" lang="pt-br " >
            <cabeça >
                <meta  http-equiv="Tipo de  conteúdo " content="text / html; charset=iso-8859-1 " />
                <título > Grafico Alertas </ title >
                
                <Vínculo  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integridade="SHA384-Vkoo8x4CGsO3 + Hhxv8T / Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous " >
                <Roteiro  src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integridade="SHA384-J6qa4849blE2 + poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ + n" crossorigin="anonymous " > </ script de >
                <Roteiro  src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integridade="SHA384-Q6E9RHvbIyZFJoft + 2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous " > </ script >
                <Roteiro  src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integridade="SHA384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous " > </ script de >
                <link  rel="stylesheet" href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css " >
                <link  rel="stylesheet" href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css " >
                <script  src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js " > </ script >
                <script  src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js " > </ script >
                <script  src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js " > </ script >
                <script  src="https://cdn.anychart.com/releases/v8/locales/pt-br.js " > </ script >
                
                <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css " >
                <! - JavaScript compilado e minificado ->
                <script  src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js " > </ script >
                <link  href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="folha de estilo " >
            </ cabeça >
            <corpo >
                <nav >
                    <div  class="nav-wrapper " >
                        <A  href="http://192.168.2.208:82/Intranet/svn_sys/christian/bylog/web/index.php?cod_item_menu=1&menu_acessado=1" class="marca-logo " > <i  class="material- icons" style="tamanho da fonte : 50 px ; margem esquerda : 50 px ; " > insert_chart </ i > teste - Balanço de alertas </ a >
                      <ul  id="nav-mobile" class="esconder-se à direita e à esquerda " >
                      </ ul >
                        
                    </ div >
                </ nav >
                <form  action=""  method="post " >
                    <div  class="form-group " >      
                        <select  class="control-form" id="exampleFormControlSelect1" name="exampleFormControlSelect1 " >
                            <option  value="" > Selecione o Ano </ option >
                            <valor da opção ="2020 " > 2020 </ option >
                            <opção  value="2019 " > 2019 </ option >
                            <opção  value="2018 " > 2018 </ option >                        
                        </ selecione >
                    </ div >
                    <input  type="hidden" name="page" value="... " >
                    <input  type="hidden" name="_show_pdf" value="1 " >
                    <div  style="position : fixed ; margin : auto ; " >
                        <input  type="submit" value="Processar" name="Processar " >
                    </ div >

<?php 
       
if(isset($vars["Processar"]) && $vars["Processar"] != ""))
{
    ?>
            <div  id="container" style="largura : 890 px ; altura : 550 px ; margem : 0  auto ; " > </ div >
            </ form >
            <script >  
            // meses falha de transmissão        
            var alerta= " <?php echo $alertaFalha [ 0 ] ?>";
            var alerta1= " <?php echo $alertaFalha [ 1 ] ?>";
            var alerta2= " <?php echo $alertaFalha [ 2 ] ?>";
            var alerta3= " <?php echo $alertaFalha [ 3 ] ?>";
            var alerta4= " <?php echo $alertaFalha [ 4 ] ?>";
            var alerta5= " <?php echo $alertaFalha [ 5 ] ?>";
            var alerta6= " <?php echo $alertaFalha [ 6 ] ?>";
            var alerta7= " <?php echo $alertaFalha [ 7 ] ?>";
            var alerta8= " <?php echo $alertaFalha [ 8 ] ?>";
            var alerta9= " <?php echo $alertaFalha [ 9 ] ?>";
            var alerta10= " <?php echo $alertaFalha [ 10 ] ?>";
            var alerta11= " <?php echo $alertaFalha [ 11 ] ?>";
           
            anychart . onDocumentReady ( function () {
            var format="EEEE, d 'de' MMMM 'de' aaaa HH: mm: ss " ;
            var locale= " pt-br " ;
            anychart . formato . outputLocale ( " pt-br " );
            anychart . formato . outputDateTimeFormat ( " EEEE, de 'MMMM' de 'aaaa HH: mm: ss " );
            var timeZoneOffset= new  Date (). getTimezoneOffset ();
            var data=[
                ['2019-01 ',0,0,0 ],
                ['2019-02 ',0,0,0 ],
                ['2019-03 ',0,0,0 ],
                ['2019-04 ',0,0,0 ],
                ['2019-05 ',0,0,0 ],
                ['2019-06 ',0,0,0 ],
                ['2019-07 ',0,0,0 ],
                ['2019-08 ',0,0,0 ],
                ['2019-09 ',0,0,0 ],
                ['2019-10 ',0,0,0 ],
                ['2019-11 ',0,0,0 ],
                ['2019-12 ',0,0,0 ]
            ];
            var title= ' Alertas registrados durante o ano de <?php echo $ano ?> \ n '    ;
            // cria um conjunto de dados em nossos dados, também podemos colocar dados diretamente em série
            var dataSet=qualquer  gráfico . dados . conjunto (dados);
            // mapeia dados da primeira série, obtém valor da primeira coluna do conjunto de dados
            var seriesData_1= dataSet . mapAs ({ ' x ' :  0,' valor ' :  1 });
            // mapear dados para a segunda série, obter valor da segunda coluna do conjunto de dados
            var seriesData_2= dataSet . mapAs ({ ' x ' :  0,' valor ' :  2 });
            // mapeia dados da terceira série, obtém x da coluna zero e valor da terceira coluna do conjunto de dados
            var seriesData_3= dataSet . mapAs ({ ' x ' :  0,' valor ' :  3 });
            var seriesData_4= dataSet . mapAs ({ ' x ' :  0,' valor ' :  4 });
            // criar gráfico de linhas
            gráfico var= qualquer gráfico . line ();
            // ligue a mira e ajuste-a
            gráfico . mira ()
                . ativado ( verdadeiro )
                . yLabel ( falso )
                . xLabel ( false )
                . yStroke ( nulo );
            // define as configurações de texto do título do gráfico
            gráfico . título (título);
            // definir preenchimento do gráfico
            gráfico . preenchimento (). topo ( 10 );
            // define o título do yAxis
            gráfico . yAxis (). título ( ' Alertas por mês ' );
            var  seriesConfiguration = function ( série,nome ) {
                séries . nome (nome);
                séries . pairou (). marcadores ()
                    . ativado ( verdadeiro )
                    . tamanho ( 4 );
            };
            // variável temp para armazenar a instância da série
            série var ;
            // configurar primeira série
            series= chart . linha (seriesData_1);
            séries . acidente vascular cerebral ( ' # FFD700 ' );
            seriesConfiguration (series, ' Falha de Transmissão ' );
            series= chart . linha (seriesData_2);
            séries . acidente vascular cerebral ( ' # FA8072 ' );
            seriesConfiguration (series, ' Rompimento de lacre ' );
            series= chart . linha (seriesData_3);
            séries . acidente vascular cerebral ( ' # 006400 ' );
            seriesConfiguration (séries, ' GPS Travado ' );
            series= chart . linha (seriesData_4);
            séries . acidente vascular cerebral ( ' # 8B0000 ' );
            seriesConfiguration (série, ' Alerta Botão Pânico ' );
            // Ativar a legenda
            gráfico . legenda (). ativado ( verdadeiro ). preenchimento ([ 0,0,10,0 ]);
            gráfico . xAxis (). etiquetas (). formato ( função () {
                retornar  anychart . formato . dateTime ( este . valor,' MMM ',timeZoneOffset, locale);
            });
            gráfico . dica de ferramenta (). titleFormat ( function () {
                retornar  anychart . formato . dateTime ( isto . aponta [ 0 ]. x,formato, timeZoneOffset, locale);
            });
            // chart.tooltip (). displayMode ('union');
            // define o ID do contêiner para o gráfico
            gráfico . container ( ' container ' );
            // inicia o desenho do gráfico
            gráfico . draw ();
            });  
        </ script >
    </ corpo >
</ html >
<?php
}
