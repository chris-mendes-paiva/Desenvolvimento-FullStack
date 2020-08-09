<?php

    // executa query
    function DBExecute($query){
        $link = DB_Connect();
        $result = @mysqli_query($link, $query) or die(mysqli_error());

        DB_Close($link);
        return $result;

    }