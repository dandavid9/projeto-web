<?php

session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
else {
    header("Location: login.php");
}

include "model/acessoDadosBD.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["idPersonagem"] = $_POST["idPersonagem"];
    $idPersonagem = $_SESSION["idPersonagem"];
    $personagem = obterPersonagem($idPersonagem);
}

include "includes/header.php";
include "view/personagemView.php";
include "includes/footer.php";

?>