<?php

session_start();

include "model/acessoDadosBD.php";

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
else {
    header("Location: login.php");
}

if (!empty($username)) {
    $likes = getLikes($username);
}

$personagens = obterPersonagens();

include "includes/header.php";
include "view/mortalKombatView.php";
include "includes/footer.php";
?>