<?php
session_start();
echo "<h2>This is the login page</h2>";
if(isset($_POST["login"])){

    $_SESSION["name"]=$_POST["name"];
    $_SESSION["password"]=$_POST["password"];
    
 if(isset($_SESSION["name"]) && isset($_SESSION["password"])){
    echo "login successful<BR>";

   sleep(5);
    header("Location: day2.php");
    
    
    }
    else{
        echo "session not valid, login again";
    }
}


include("footer.html");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="session.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
