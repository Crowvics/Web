<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type = "text/css">
        *{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        body{
            background-color: #D3D3D3;
            background-size: cover;
        }
        div{
            background-color: rgba(0, 0, 0, 0.9); 
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              padding: 80px;
              border-radius: 15px;
              color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        input[type=submit]{
            background-color: #836FFF;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        input[type=submit]:hover{
            background-color:#6959CD;
        }
        a:link{
            color:white;
        }
        a:visited {
            color: white;
        }
        a:hover {
        color: red;
        }
    </style>
    <title>Login</title>
    <?php

    include_once ('conexao.php');

    ?>
</head>
<body>
<div>
    <center><h1>Login</h1></center>
    <form method = "POST" action = "login.php">
        Usuário <br>
        <input type = "text" name = "txt_usuario"> <br>
        Senha <br>
        <input type = "password" name = "txt_senha"> <br> <br>
        <input type = "submit" value = "Acessar"> <br> <br>
        <a href = "cadastrarUsuario.html">Cadastrar-se</a>
    </form>
</div>
</body>
</html>