<?php
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('BASE', 'clinica2');

	$conn = new MySQLi(HOST,USER,PASS,BASE);

	/*if($conn==true){
		print "Conectou";
	}else{
		print "Não conectou";
	}*/

