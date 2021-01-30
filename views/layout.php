<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= join(' - ', array_reverse($titles)) ?></title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	<h1>Опросы</h1>
	<?php if (IS_LOGGED) : ?>
		<ul class="menu">
			<li><a href='./?page=main'>Список экспертных сессии</a></li>
			<li><a href='./?page=add'>Добавить экспертную сессию</a></li>
			<li><a href='/?controller=user&action=logout'>Выход</a></li>
		</ul>	
	<?php endif; ?>
	<hr>

  <?php require_once('routes.php') ?>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="assets/script.js"></script>	
  <p>(c)2020 Опросы</p>
	
</body>
</html>
