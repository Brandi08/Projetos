<?php

    if(isset($_POST['submit']))
    {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('E-mail: ' . $_POST['email']);
        //print_r('<br>');
        //print_r('Senha: ' . $_POST['senha']);

        include_once('config.php');

        $nome =  $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];


        $result = mysqli_query($conexao, "INSERT INTO usuario(nome,senha,email) VALUES('$nome','$senha','$email')");

        header('Location: index.php');

    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brandi Registro</title>
    <link rel="stylesheet" href="registro.css">
</head>
<body>
    
<div class="voltar">
    <a href="home.php">voltar</a>
</div>
    
<div class="linha">
    <div class="login">
        <form action="register.php" method="POST">
            <h2>registro</h2>
            <div class="input-grup">
                <input type="text" name="nome" id="nome" placeholder="Usuario" required>
            </div>
            <div class="input-grup">
                <input type="email" name="email" id="email" placeholder="E-mail" required>
            </div>
            <div class="input-grup">
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
            </div>
            <button type="submit" name="submit" id="submit" class="bnt">Registro-se</button>
        </form>
    </div>
<div>

</body>
</html>