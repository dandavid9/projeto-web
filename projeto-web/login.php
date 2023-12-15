<?php
session_start();



if (isset($_POST['login']) && !empty($_POST['username'])) {
        $_SESSION['username'] = $_POST['username'];
        
        header("Location: streetFighter.php");
        exit();
}

include "view/loginView.php";
?>