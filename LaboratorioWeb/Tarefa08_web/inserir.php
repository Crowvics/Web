<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Documento PHP</title>
</head>
<body>
    <?php
        include "conexao.php";
        $nome=$_POST['nome'];
        $sql="Insert into noticia(nome) values ('$nome')";
        echo "<h1>Cadastro efetuado!<h1>";
        $sql = mysql_query($sql) or die ("Erro ao gerar dados!.mysql_error()");
    ?>
</body>
</html>