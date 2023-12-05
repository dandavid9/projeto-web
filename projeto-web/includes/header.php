<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Projeto Web</title>
	<link rel="stylesheet" href="view/css/projeto.css">

</head>
<body>

	<h1>Projeto</h1>
	<nav>
		<?php 
			$scriptName = basename($_SERVER['PHP_SELF']);
		 ?>
		<a href="streetFighter.php"
		   <?php echo $scriptName == 'streetFighter.php' ? "class='corrente'" : '' ?>
		>Street Fighter 6</a>
		<a href="mortalKombat.php"
		   <?php echo $scriptName == 'mortalKombat.php' ? "class='corrente'" : '' ?>
		>Mortal Kombat 1</a>
		<a href="tekken.php"
		   <?php echo $scriptName == 'tekken.php' ? "class='corrente'" : '' ?>
		>Tekken 7</a>
	</nav>