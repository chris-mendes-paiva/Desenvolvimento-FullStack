<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <form action="" method="post">
        <p>
            Name:<input type="text" name="nome" value="" />
        </p>
        <p>
            Email:<input type="text" name="email"  value="" />
        </p>
        <p>
            tel:<input type="text" name="tel"  value="" />
        </p>
        <p>
            <input type="submit" value="Cadastrar" />
        </p>
    </form>

    <?php
      require 'config.php';
      require 'connection.php';     
      require 'database.php';
      
      if(empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['tel'])){
        echo 'Formulario falta dados';
      }else{
          $query = "INSERT INTO clientes (nome, email, tel) VALUES ('".$_POST['nome']."', '".$_POST['email']."','".$_POST['tel']."');";
          var_dump(DBExecute($query));
      }
      
      /* 
      // abrindo conexão
      $link = DB_Connect();
      // Fechando conexão
      DB_Close($link);
      */
    ?>
</body>
</html>