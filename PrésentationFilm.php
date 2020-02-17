<html>
	<head>
		<meta charset="utf-8"/>
		<link rel = "stylesheet" href ="traitementPageAccueil.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
		<title> Présentation Film</title>
	</head>
	<body>
		<div class="container-fluid" style="border: 1px solid silver;width:60%;">
		
		<?php 
				require("afficherFilm.php");
				require ("connectFilm.php");
				while($tuple = $curseurFilm->fetch())
				{
					echo "<div class ='row'>
							<div class='col-md-4'>
								<div class='image'>
									<img src = '$tuple[lien_image]' alt='$tuple[Titre]'";
					echo		"</div>
							</div>
							<div class='col-md-6'>
								<h2>";
					echo			$tuple['Titre'];
					echo		"</h2>
								<h3>".$tuple['realisateur'].",".$tuple['annee_de_sortie']."</h3>";
					echo 		"<blockquote>";
					echo 		$tuple["description_courte"];
					echo 		"</blockquote>";
					echo 	"</div>
						</div>";
				}
		?>
		</div>
	</body>
</html>