<?php
session_start();

if(!isset($_SESSION['username'])){
echo"please register to read content of blogs";}
else{
    echo"welcome to blog.<br> {$_SESSION["username"]}";
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <form method="post" action="logout.php"> 
        <button type="submit" name="logout">Logout</button>
    </form>
    
</body>
</html>
    <?php

    
}





?>

