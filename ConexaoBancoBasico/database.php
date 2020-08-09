<?php

    function DB_Create($tabela, $dados){    
         
        $query = "INSERT INTO clientes (nome, email, tel) VALUES ('".$dados['nome']."', '".$dados['email']."','".$dados['tel']."');";
        DBExecute($query);
    }

    // executa query
    function DBExecute($query){
        $link = DB_Connect();
        $result = @mysqli_query($link, $query) or die(mysqli_error());

        DB_Close($link);
        return $result;

    }
