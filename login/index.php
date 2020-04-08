<?php
    session_start();
    require_once "function.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Olá</h1>
    <?php if(login()): ?>
        <p>Sejá Bem vindo, <?php echo $_SESSION['user_name']; ?> | <a href="logout.php">Sair</a></p>
        <?php else: ?>
            <p>Olá, Você não esta logado, para se logar <a href="teste1.php"> Click aqui </a>
    <?php endif; ?>
</body>
</html>