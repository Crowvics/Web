<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Documento PHP</title>
</head>
<body>
    <?php
        include "conexao.php";
        echo "<form action='alterar2.php' method='post'>";
        echo "Digite o código do cliente para alterar os dados.<BR>
        <input name='codigo' type='text' size=4<BR>";
        echo"<input type='submit' value='Clique aqui para confirmar a alteração.'>";
        echo "</form>";
    ?>
</body>
</html>