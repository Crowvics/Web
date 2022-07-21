<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Documento PHP</title>
</head>
<body>
    <?php
    echo "<h1> Cadastrar noticias </h1>";
    echo "<hr><br>";

    echo "<form action='inserir.php' mmethod='post'>";
    echo "<input type='text' name=nome>";
    echo "<input type='submit' value='cadastrar'><br>";
    echo "</form>";
    ?>
</body>
</html>
