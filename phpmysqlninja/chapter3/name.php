<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
 $firstName = $_REQUEST['firstname'];
 $lastName = $_REQUEST['lastname'];
 if ($firstName == 'Kevin' and $lastName == 'Yank')
 {
    echo 'Welcome, of glorious leader!';
 }
 else 
 {
     echo 'Welcome to our website, ' .
     htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
     htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
 }
    ?>
</body>
</html>