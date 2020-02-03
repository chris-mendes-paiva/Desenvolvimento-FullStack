<?php
session_start();
include('verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['nome'];?></h2>
<h2><a href="http://192.168.2.208:82/Intranet/svn_sys/christian/bylog_chris/web/index.php?login=true">Prosseguir</a></h2>
<h2><a href="logout.php">Sair</a></h2>