<?php 

	try
	{
		$pdo = new PDO('mysql:host=localhost; dbname=ijdb', 'ijdbuser', 'peperonipizza');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->exec('SET NAMES "utf8"');
	}
	catch (PDOException $e)
	{
		$output = 'Unable to connect to the databse server.' . $e->getMessage();
		include 'output.html.php';
		exit();
	}

	$output = 'Databse connection established.';
	include 'output.html.php';


 ?>