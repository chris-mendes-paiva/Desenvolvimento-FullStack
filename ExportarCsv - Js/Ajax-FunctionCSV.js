$('body').on('click', '.exportar-csv', function() {
        var cliente = $('#export').val();
        
        $.ajax({
            type: 'POST',
            url: 'index.php',
            async:true,          
            data: {
                page: 'tela_mapa/dados_csv',
                _show_pdf: 1,
                cliente:cliente
            }, 
            success: function (data) {
                alert('Chris');
                console.log(data);
                   
                var  csvFileData  = JSON.parse(data);  
                                     
                download_csv_file(csvFileData); 
                
            }
        });
    });




// cria uma função definida pelo usuário para baixar o arquivo CSV   
    function download_csv_file(csvFileData){  

        // define o título para cada linha dos dados  
        var  csv  =  'Nome, profissão \n' ;  

        // mesclar os dados com CSV  
        csvFileData.forEach (function (row) {  
                csv += row.join (',');  
                csv += "\n";  
        });  

        // exibe os dados CSV criados no navegador da web   
        //document.write (csv);  


        var  hiddenElement  =  document .createElement('a');  
        hiddenElement.href  =  'data: text/csv; charset = utf-8,'  + encodeURI(csv);  
        hiddenElement.target  =  '_blank' ;  

        // forneça o nome do arquivo CSV a ser baixado  
        hiddenElement.download  =  'Personalidades_famosas.csv' ;  
        hiddenElement.click();  
    }  
