<html lang="pt-BR"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- INÍCIO GOOGLE FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- FINAL GOOGLE FONTES -->
    <!-- INÍCIO BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- FINAL BOOTSTRAP -->
    <title>Sistema de Feedback da ALEPE</title>
    <link rel="stylesheet" type="text/css" href="style.css">    
    <link rel="shortcut icon" href="fotos/Brasão_de_Pernambuco.svg.png" type="img/x-png">
</head>
<body>
    <div class="container">
        <img src="fotos/sti-logo-original.png" alt="Logo da ALEPE" class="logo" width="300px" height="160px">
        <h1>Alepe Feedback</h1>

        <form action="cadastrafeedback.php" method="post" id="formulario">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required="">
            
            <label for="setor">Selecionar o setor:</label>
            <select id="setor" name="setor" required="">
              <option value="">Selecione um setor</option>
    <?php
            include "conexao.php";
            $sql = "select id, nome from setores order by nome";
            $consulta = mysqli_query($mysqli, $sql);
            while ($linha = mysqli_fetch_array($consulta)) {
                $id = $linha[0];
                $nome = $linha[1];
                echo "<option value='$id'>$nome</option>\n";
            }
            mysqli_close($mysqli);
    ?>

            </select>

            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" rows="4" required=""></textarea>

            <button type="submit">Enviar Feedback</button>
        </form>
        
        <div id="popup" class="popup">
            <div class="popup-content">
                <p>Feedback enviado!</p>
            </div>
        </div>
        
    </div>
<script src="script.js"></script>    
    <footer>
        <div class="social-icons">
            <div>
                <img src="fotos/Brasão_de_Pernambuco.svg.png"  alt="" width="50px" height="50px">
            </div> 
            <div class="textinho">
                <p>© Criado pela área de desenvolvimento</p>
            </div>
            <div>
                <a href="https://www.facebook.com/assembleiape" target="_blank" type="external"><button><i class="bi bi-facebook"></i></button></a>
                <a href="https://www.instagram.com/assembleiape" target="_blank" type="external"><button><i class="bi bi-instagram"></i></button></a>
                <a href="https://youtube.com/@assembleiape" target="_blank" type="external"><button><i class="bi bi-youtube"></i></button></a>
                <a href="https://www.tiktok.com/@assembleiape" target="_blank" type="external"><button><i class="bi bi-tiktok"></i></button></a> 
            </div>
        </div>
    </footer>


</body>
</html>