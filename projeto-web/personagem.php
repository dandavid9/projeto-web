<?php

session_start();

include "model/acessoDados.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["codPersonagem"] = $_POST["codPersonagem"];
    $codPersonagem = $_SESSION["codPersonagem"];
    $personagem = obterPersonagem($codPersonagem);
}

include "includes/header.php";
include "view/personagemView.php";
include "includes/footer.php";

?>