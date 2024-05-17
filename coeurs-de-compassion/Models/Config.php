<?php

class connexion{

public static function DbConnexion(){

    $server = "localhost";
    $db = "accov";
    $user = "root";
    $pass = "0000";
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');	 
    $connexion = new PDO('mysql:host=' . $server . '; dbname=' . $db, $user, $pass,$options );
	return $connexion;	

    
}

}




?>