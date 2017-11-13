<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<header>
		<div id="banner">
			<h1>PORTFOLIO</h1>
		</div>

		<div id="menu">
			<ul>
				<li><a href="?c=accueil&a=showAccueil">Accueil</a></li>
				<li><a href="?c=services&a=showServices">Services</a></li>
				<li><a href="?c=realisations&a=showRealisations">Réalisations</a></li>
				<li><a href="?c=CV&a=showCV">CV</a></li>
				<li><a href="?c=Contact&a=showContact">Contact</a></li>
			</ul>
		</div>
	</header>

	<main>
		<?=$view?>
	</main>

	<footer>
	</footer>

</body>
</html>