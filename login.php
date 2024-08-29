<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/login.css">
    <!-- COMEÇO FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <!-- FINAL FONTS -->
    <title>Login Feedback</title>
    <link rel="shortcut icon" href="fotos/Brasão_de_Pernambuco.svg.png" type="img/x-png">
</head>
<body>
    <div class="container">
        <img src="fotos/sti-logo-original.png" alt="logo da alepe" height="160" width="300">
        <h1>Acessar Feedbacks</h1>
        <form action="testLogin.php" method="POST">
        <div class="input-container">
            <input type="text" name="login" placeholder="Login">
            <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/user.png" alt="user"/>
        </div>
        <div class="input-container">
            <input placeholder="Senha" name="senha" type="password" required>
            <img width="20" height="20" src="https://img.icons8.com/ios-glyphs/30/lock--v1.png" alt="lock--v1"/>
        </div>
        <?php
        
        if (isset($_SESSION['login_erro'])) {
            echo '<p style="color:red;">' . $_SESSION['login_erro'] . '</p>';
            
            unset($_SESSION['login_erro']);
        }
        ?>
        <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>

    </div>
    
</body>
</html>