<?php

    session_start();
    if (!isset($_SESSION['usuario_id'])) {
        header("Location: login.php");
    }

?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/msgs.css">
    <title>Feedbacks</title>
    <!-- COMEÇO FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <!-- FINAL FONTS -->
    <!-- COMEÇO BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- FINAL BOOTSTRAP -->
    <link rel="shortcut icon" href="fotos/Brasão_de_Pernambuco.svg.png" type="img/x-png">
</head>

<header>
    <a class="botao_logout" href="logout.php">Logout</a>
</header>

<body>
    <div class="container">
        <h1 class="titulo"></h1>
        <section>
            <table class="tabela">
                <tr>
                    <th>Setor</th>
                    <th>Nome</th>
                    <th>Feedback</th>
                    <th></th>
                </tr>
                <?php
                include "conexao.php";

                $sql = "SELECT feedback.id, setores.nome nomedosetor, feedback.nome nomedosolicitante, feedback FROM feedback INNER JOIN setores ON feedback.idsetor = setores.id";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['nomedosetor'] . "</td>";
                        echo "<td>" . $row['nomedosolicitante'] . "</td>";
                        echo "<td class='mensagem'>" . $row['feedback'] . "</td>";
                        echo "<td>
                                <div class='social'>
                                    <form action='delete_feedback.php' method='post' style='display:inline-block;'>
                                        <input type='hidden' name='id' value='" . $row['id'] . "'>
                                        <button class='btn-branco' type='submit'><i class='bi bi-trash3-fill'></i></button>
                                    </form>
                                </div>
                            </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Nenhum feedback encontrado.</td></tr>";
                }

                $mysqli->close();
                ?>
            </table>
        </section>
    </div>    
    <script src="msgs.js"></script>
</body>
</html>
