<?php 
	
	try 
	{
		$sql = 'UPDATE joke SET jokedate="2019-03-19"
		WHERE joketext LIKE "%chicken%"';
		$affectedRows = $pdo->exec($sql);
	}
	catch (PDOException $e)
	{
		$output = "Updated $affectedRows rows.";
		include 'output.html.php';
	}

 ?>