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
        echo "<form action='confirma.php' method=POST>";
        echo "Digite o código para confirmar a exclusão do cliente<BR>
        <input name='codigo' type='text' size=30<BR>>";
        echo "<input type='submit' value='Confirmar Exclusão'>";
        echo "</form>";
    ?>
</body>
</html>