<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Clientes</title>
    <style type = "text/css">
        *{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin: 0 auto;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #D3D3D3;
            background-size: cover;
        }
        table, td, th{
            border: 1px solid #000;
        }

        table{
            width: 1200px;
            table-layout: fixed;
            border-collapse: collapse;
        }

        td, th{
            height: 50px;
            vertical-align: middle;
            text-align: center;
        }
        th{
            background-color: #A9A9A9;
            font-size: 20px;
        }

        

    </style>
    <?php

    include_once ('conexao.php');

    ?>
</head>
<body>
<br>
    <center>
        <b><h1>Tabela de Clientes</h1></b>
    </center>
    <br>
        <h3><a href = "site.php">Página Inicial</a></h3> <br>
        <hr>
        <br>
    <center>
    <table rules = "all" border = "1">
        <thread>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Estado</th>
            </tr>
        </thread>

        <tbody>

        <?php
        $sql_consulta = mysqli_query ($conectar, "SELECT *FROM tbclientes");

        while ($dados = mysqli_fetch_array($sql_consulta)){
            ?>

            <tr>
                <td> <?= $dados [0] ?> </td>
                <td> <?= $dados [1] ?> </td>
                <td> <?= $dados [2] ?> </td>
                <td> <?= $dados [3] ?> </td>
                <td> <?= $dados [4] ?> </td>
                <td> <?= $dados [5] ?> </td>

                <td><a href = "editar.php?codigo=<?= $dados[0] ?> "> Atualizar </a> </td>
            </tr>

            <?php } ?>
    </center>
    
</body>
</html>