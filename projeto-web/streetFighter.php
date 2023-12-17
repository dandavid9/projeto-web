<?php

session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
else {
    header("Location: login.php");
}

include "model/acessoDadosBD.php";
$personagens = obterPersonagens();

include "includes/header.php";
include "view/streetFighterView.php";
include "includes/footer.php";
?>