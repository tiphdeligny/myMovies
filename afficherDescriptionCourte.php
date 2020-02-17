<?php
require ("connect.php");
if ($BDD){
	$MaRequete="SELECT description_courte FROM films";
	$CurseurFilm=$BDD->query($MaRequete);}
?>