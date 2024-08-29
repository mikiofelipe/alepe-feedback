<?php
session_start();
include 'conexao.php'; 
if (isset($_POST['login']) && isset($_POST['senha'])) {

    
    $stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE binary login = ? and binary senha = ?");
    $stmt->bind_param("ss", $login, $senha);
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $stmt->execute();
    $resposta = $stmt->get_result();

    if ($usuario = $resposta->fetch_assoc()) {
        
        $_SESSION['usuario_id'] = $usuario['id'];
        header("Location: mensagens.php"); 
        exit();
    } else {
        $_SESSION['login_erro'] = "Senha incorreta. Por favor, tente novamente.";
        header("Location: login.php");
        exit();
    }
}
?>

