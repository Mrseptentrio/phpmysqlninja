<?php 
	
	try
	{
		$sql = 'CREATE TABLE joke (
			id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
			joketext TEXT,
			jokedate DATE NOT NULL
		) DEFAULT CARACTER SET utf8 ENGINE=InnoDB';
		$pdo->exec($sql);
	}
	catch (PDOException $e)
	{
		$output = 'Error creating joke table: ' . $e->getMessage();
		include 'output.html.php';
		exit();
	}

	$output = 'Joke table succesfully created.';
	include 'output.html.php';


 ?>