<html>
	<head>
		<meta charset="utf-8"/>
		<link rel = "stylesheet" href ="traitementPageAccueil.css" />
		<title> Page Principale </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
	</head>
	<body>
	
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary"> 
		   <a class="navbar-brand" href="#"> </a> 
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"> 
				<span class="navbar-toggler-icon"></span> 
			</button> 
		  <div class="collapse navbar-collapse" id="main_nav"> 
		<ul class="navbar-nav"> 
			<li class="nav-item active"> <a class="nav-link" href="#">My Movies </a> </li> 
			<li class="nav-item dropdown"> 
				<a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  Non-connecté  </a> 
				<ul class="dropdown-menu "> 
					<li><a class="dropdown-item" href="#"> Me connecter</a></li> 
				</ul> 
			</li> 
		 </ul> 
		  </div> <!-- navbar-collapse.// --> 
		 </nav> 

		
	<div class="row">
	
		<div class="col-md-12 ml-auto mr-auto">
			<div class="container-fluid" style="border: 1px solid silver;width:60%;">
				
				<?php 
				require("afficherFilm.php");
				require ("connectFilm.php");
				while($tuple = $curseurFilm->fetch())
				{
					echo "<h1> <a href= 'PrésentationFilm.php'>";
					echo $tuple["Titre"];
					echo "</a></h1><br/>";
					echo "<blockquote>";
					echo $tuple["description_courte"];
					echo "</blockquote>";
				}
				?>
				
				<hr>
				<div class="text-align">
					Tiphaine de Ligny
				</div>
		
			</div>
		</div>
	</div>
		
			
		
	</body>
</html>