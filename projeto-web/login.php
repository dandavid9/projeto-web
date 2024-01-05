<?php
session_start();

include "model/acessoDadosBD.php";
if(isset($_POST['login']) && !empty( $_POST['username']) && !empty( $_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $_SESSION['username'] = $username;

        if(!validUser($username, $password) ) {
            echo "Utilizador não encontrado. Por favor, verifique suas credenciais.";
        }
        else {
            header('Location:streetFighter.php');
        }
        
    }
        

        
include "view/loginView.php";
?>