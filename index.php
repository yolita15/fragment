<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

	<title>Fragment</title>
</head>
<body>
	<?php 
	require_once('controllers/dataBaseController.php');
	?>
	<!-- Navigation Bar  -->
	<ul class="topnav">
		<li><a class="logo" href="index.html"></a></li>
		<a href="login.php"><li class="right">Вход</li></a>
		<a href="register.php"><li class="right">Регистрация</li></a>
	</ul>

	<div class="container">
		<!-- Search form  -->
		<form class="search">
			<input type="text" name="search" placeholder="Напр: дума, автор и т.н...">
			<button type="submit" title="Търси"><i class="fas fa-search fa-2x"></i></button>
		</form>

		<!-- Add form  -->
		<textarea></textarea>
		<form class="add">
			<input type="text" name="author" placeholder="Автор, източник">
			<div class="addButtons">
				<button title="Добави"><i class="fas fa-plus-circle"></i> Добави</button>
				<button id="facebook" title="Пубикация във фейсбук"><i class="fab fa-facebook"></i></button>
			</div>			
		</form>
	</div>

	<script type="text/javascript" src="fontawesome/js/all.min.js"></script>
</body>
</html>