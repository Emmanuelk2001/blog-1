<?php
function connexion_database(){
    try {
    	$database = new PDO('mysql:host=localhost;dbname=myblog;charset=utf8', 'root', '');
        return $database;
	} catch(Exception $e) {
    	die('Erreur : '.$e->getMessage());
	}
   
   
}

