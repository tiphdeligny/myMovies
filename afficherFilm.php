<?php
require ("connectFilm.php");
if ($BDD){
	$MaRequete="SELECT * FROM films";
	$curseurFilm=$BDD->query($MaRequete);}
?>