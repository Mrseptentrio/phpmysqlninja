<?php

try
{
	$pdo = new PDO('mysql:host=localhost;dbname=ijdb', 'ijdbuser', 'peperonipizza');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
	$error = 'Unable to connect to the databse server.';
	include 'error.html.php'
	exit();
}


try
{
	$sql = 'SELECT joketext FROM joke';
	$result = $pdo->query($sql);
}
catch (PDOException $e)
{
	$error = 'Error fetching jokes: ' . $e->getMessage();
	inlude 'error.html.php';
	exit();
}

while ($row = $result->fetch())
{
	$jokes[] = $row['joketext'];
}

include 'jokes.html.php';