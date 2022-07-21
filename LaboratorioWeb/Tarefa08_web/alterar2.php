<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Documento PHP</title>
</head>
<body>
    <?php
        include "conexao.php";
        $codigo=$_POST['codigo'];
        $sql = "select * from noticia where codigo='$codigo'";
        $resultado = mysql_query($sql) or die ("Não foi possível realizar a consulta ao banco de dados!");
        while($linha = mysql_fetch_array($resultado)){
            $codigo = $linha['codigo'];
            $nome = $linha['nome'];
            echo "<h1> Alterar Cadastro...</h1>";
            echo "<h1><BR>";
            echo "<form action='alterar_db.php?codigo=$codigo' method='post'>";
            echo "Código do cliente:<input name='codigo_novo' type='text'
            value='$codigo' size=30>*<BR>";
            echo "Nome:<input name='nome_novo' type='text' value='$nome' size=30>*<BR>";
            echo "<input type='submit' value='Alterar'>";
            echo "</form>";
            echo "<BR><hr>"; 
        }
    ?>
</body>
</html>