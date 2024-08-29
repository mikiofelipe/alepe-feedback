<?php

    session_start();
    unset($_SESSION['usuario_id']);
    session_destroy(); 
    header("Location: login.php"); 
    exit(); 
    
    
?>