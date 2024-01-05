<?php
session_start();

include "model/acessoDadosBD.php";
if(isset($_POST['login']) && !empty( $_POST['username'])) {
        $username = $_POST['username'];

        $_SESSION['username'] = $username;

        if(!usernameExists($username) )
            adicionarUser( $username );

        header("Location: streetFighter.php");
        exit();
    }
        

        
include "view/loginView.php";
?>