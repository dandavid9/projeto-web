<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Projeto Web</title>
	<link rel="stylesheet" href="view/css/projeto.css">

</head>
<body>

	<nav style='display: inline;'>
		<?php 
			$scriptName = basename($_SERVER['PHP_SELF']);
		 ?>
		<a href="streetFighter.php"
		   <?php echo $scriptName == 'streetFighter.php' ? "class='corrente'" : '' ?>
		>Street Fighter 6</a>
		<a href="mortalKombat.php"
		   <?php echo $scriptName == 'mortalKombat.php' ? "class='corrente'" : '' ?>
		>Mortal Kombat 1</a>

	</nav>
	<div style='display: inline; border: black; border-style: solid;'>
	<?php
            echo "<p style='display: inline; padding-right:10px'>User: $username</p>";
			echo "<a href='logout.php' style='display: inline;'>Logout</a>";
            ?> 
	</div>