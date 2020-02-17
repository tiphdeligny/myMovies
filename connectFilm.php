<?php
	try{
		$BDD= new PDO("mysql:host=localhost;dbname=films;charset=utf8","testutilisateur","test", array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e)
	{ die('Erreur fatale:'.$e->getMessage());}
	
?>