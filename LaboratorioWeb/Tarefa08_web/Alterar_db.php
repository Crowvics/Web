<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Documento PHP</title>
</head>
<body>
    <?php
        include "conexao.php";
        $codigo=$_POST['codigo_novo'];
        $nome=$_POST['nome_novo'];

        $sql="Update noticia set codigo='$codigo', nome='$nome' where codigo='$codigo'";
        $resultado = mysql_query($sql) or die ("Não foi possível a conexão com o banco de dados");
        echo "<h1>Dados da notícia foram alterados com sucesso!</h1>";
        ?>
</body>
</html>