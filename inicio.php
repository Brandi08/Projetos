<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    }
    $logado = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="stylesheet" href="inicio.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <header class="header">
        
        <div class="user">
            <a href="sair.php"><i class='bx bxs-home'></i></a>
        </div>

        <nav class="navbar">
            <h1><b>BRANDI</b></h1>
        </nav>

        <div class="midia">
            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
            <a href="#"><i class='bx bxl-whatsapp' ></i></a>
            <a href="#"><i class='bx bxs-user'></i></a>
        </div>
    </header>
</body>
</html>