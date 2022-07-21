<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Documento PHP</title>
</head>
<body>
    <?php
    echo "<h1>Lista das notícias cadastradas</h1>";
    include "conexão.php";
    while($reg=mysql_fetch_assoc($busca))
    {
        echo "<hr>";
        echo "<BR>Código:".$reg["codigo"];
        echo "<BR>Nome:".$reg["nome"];
    }
    mysql_free_result($busca);
    mysql_close($link);
    ?>
</body>
</html>