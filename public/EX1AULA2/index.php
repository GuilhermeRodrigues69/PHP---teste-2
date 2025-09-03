<?php
include 'cabecalho.php';

$filme = $_POST['filme'] ?? "";
$genero = $_POST['genero'] ?? "";
?>
<html>
    <body>
        <center>
            <form action="index.php" method="POST"><br>
               <h1> Nome do Filme: <input type="text" name="filme" required></h1>
               <h1> Gênero: <input type="text" name="genero" required></h1><br>
               <h1><button type="submit">ENVIAR</button></h1>
            </form>

        <h2><p>O filme <?= $filme ?></strong> é do gênero <?= $genero ?>.</p></h2>
       </center>
        <?php include 'rodape.php'; ?>
    </body>
</html>
