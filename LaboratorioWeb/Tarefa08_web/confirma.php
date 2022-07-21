<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Documento PHP</title>
    <?php
        include "conexao.php";
    ?>
</head>
<body>
    <?php
        $codigo = $_POST['codigo'];
        $sql = "delete from noticia where codigo='$codigo'";
        $resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta ao banco de dados");
        echo "<BR>Notícia exluída com sucesso!";
    ?>
</body>
</html>