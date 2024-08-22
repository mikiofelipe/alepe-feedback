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

<body>
    <div class="container">
        <h1 class="titulo">Feedbacks</h1>
        <section>
            <table class="tabela">
                <tr>
                    <th>Setor</th>
                    <th>Nome</th>
                    <th>Mensagem</th>
                    <th>Avaliação</th>
                </tr>
                <?php
                include "conexao.php";

                $sql = "SELECT id, idsetor, nome, feedback FROM feedback";
                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['idsetor'] . "</td>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td class='mensagem'>" . $row['feedback'] . "</td>";
                        echo "<td>
                                <div class='social'>
                                    <form action='delete_feedback.php' method='post' style='display:inline-block;'>
                                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                                    <button class='btn-vermelho' type='submit'><i class='bi bi-trash3-fill'></i></button>
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
