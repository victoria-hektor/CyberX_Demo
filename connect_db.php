<?php
	$db_username = 'root';
	$db_password = '';
	$db_connect = new PDO( 'mysql:host=localhost;dbname=db_login', $db_username, $db_password );
	if(!$db_connect){
		die("Fatal Error: Connection Failed!");
	}
?>