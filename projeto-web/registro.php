<?php
session_start();

include "model/acessoDadosBD.php";
if(isset($_POST['registro']) && !empty( $_POST['username']) && !empty( $_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(usernameExists($username, $password) ) {
            echo "Ja existe um utilizador com este username.";
        }
        else {
            adicionarUser($username, $password);
            header('Location:streetFighter.php');
        }
        
    }
        

        
include "view/registroView.php";
?>