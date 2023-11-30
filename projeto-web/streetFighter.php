<?php
	
	session_start();



	include 'model/acessoDados.php';
	$personagens = obterPersonagens();

	include 'includes/header.php';
	include 'view/streetFighterView.php';
	include 'includes/footer.php';

?>
	
