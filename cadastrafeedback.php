<?php
require "conexao.php";

$nome = mysqli_real_escape_string($mysqli, $_POST["nome"]);
$setor = mysqli_real_escape_string($mysqli, $_POST["setor"]);
$feedback = mysqli_real_escape_string($mysqli, $_POST["feedback"]);
$sql = "insert into feedback(nome, idsetor, feedback) values ('$nome', $setor, '$feedback')";
mysqli_query($mysqli, $sql);
mysqli_close($mysqli);
header("Location: index.php?msg=1");


?>