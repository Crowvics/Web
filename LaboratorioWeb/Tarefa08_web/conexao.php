<?php
?host = "localhost";
?usuario = "root";
?senha = "";
$link = mysql_connect($host, $usuario, $senha) or die ("Não foi possível conectar")
$banco = mysql_select_db("revista", $link) or die ("Erro ao abrir o banco")
$busca = mysql_query("select * from noticia") or die ("Erro ao abrir busca")
?>

