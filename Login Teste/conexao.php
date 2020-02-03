<?php
define('HOST', '000.000.000.000');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', '');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');
