<?php

session_start();

include "model/acessoDadosBD.php";

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $likes = getLikes($username);
}
else {
    header("Location: login.php");
}

$personagens = obterPersonagensRanking();

include "includes/header.php";
include "view/rankingView.php";
include "includes/footer.php";
?>