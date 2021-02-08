<?php

    // Proteger contra injection
    function DBEscape($dados){
        $link = DB_Connect();

        if(!is_array($dados)){
            $dados = mysqli_real_escape_string($link, $dados);
        }else{
            $arr = $dados;

            foreach($arr as $key => $values){
                $key = mysqli_real_escape_string($link, $key);
                $values = mysqli_real_escape_string($link, $values);
                // Remontando o Array
                $dados[$key] = $values;
            }
        }
        DB_Close($link);
        return $dados;
    }

    // Funcao fecha conexacao com MySQL
    function DB_Close($link){
        @mysqli_close($link) or die(mysqli_error($link));

    }
    // Funcao abre conexacao com MySQL
    function DB_Connect(){
        // @ para esconder o erro
        $link = @mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die(mysqli_connect_error());
        mysqli_set_charset($link, DB_CHARSET) or die(mysqli_error($link));

        return $link;
    }