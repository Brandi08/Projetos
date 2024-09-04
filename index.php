
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brandi login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="voltar">
    <a href="home.php">voltar</a>
</div>
    
<div class="linha">
    <div class="login">
        <form action="testLogin.php" method="POST">
            <h2>login</h2>
            <div class="input-grup">
                <input type="text" name="nome" id="nome" placeholder="Usuario" required>
            </div>
            <div class="input-grup">
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
            </div>
            <button type="submit" name="submit" id="submit" class="bnt">login</button>
        </form>
    </div>
<div>

</body>
</html>