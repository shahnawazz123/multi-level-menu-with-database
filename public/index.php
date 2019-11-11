<?php require_once 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Multilevel Dynamic Navigation Menu</title>
	<link rel="stylesheet" href="public/css/style.css">
</head>
<body>

	<div class="container">
		<nav class="top-nav">
			<ul class="main">
				<li><a href="" class="brand">Company Logo</a></li>
				<?= show_menu() ?>
			</ul>
		</nav>

		<div class="info">
			<h1>Multilevel Dynamic Navigation Menu</h1>
			<p>HTML, CSS, PHP & MySQL Database</p>
		</div>


		<div class="form-wrapper">
			<form action="sort.php" method="post">
				<?= get_parent_menu_items() ?>
				<input type="submit" name="submit" value="Update Sorting Order!!">
			</form>
		</div>


	</div>	
	
</body>
</html>