<?php
	$servidor="localhost";
	$banco="";
	$usuario="root";
	$senha="";

	$conn = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
?>