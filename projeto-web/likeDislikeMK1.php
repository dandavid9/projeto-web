<?php

    session_start();
	
	include "model/acessoDadosBD.php";

    $username = isset( $_SESSION['username']) ? $_SESSION['username'] : '';
	
	if ( !empty( $username )) {

		if( isset( $_POST['idPersonagem'] ))
		{
			$id = $_POST['idPersonagem'] ;
			
			if( $_POST['opLike'] == 'Like')
			{
				// Like
				adicionarLike($username, $id);
			}
			else
			{
				//Dislike
				removerLike($username, $id);
			}
		}
	}

    header('Location:mortalKombat.php');
?>