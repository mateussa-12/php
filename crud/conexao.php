<?php
	$servidor="localhost";
	$banco="tabelaUsuario";
	$usuario="root";
	$senha="";

	$conn = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
?>