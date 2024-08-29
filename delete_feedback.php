<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    if (!empty($id)) {
        $sql = "DELETE FROM feedback WHERE id = ?";

        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("i", $id);

            if ($stmt->execute()) {
                
                header("Location: mensagens.php"); 
                exit();
            } else {
                echo "Erro ao excluir o feedback.";
            }

            $stmt->close();
        }
    }
}

$mysqli->close();
?>
