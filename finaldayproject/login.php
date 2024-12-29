<?php
session_start();
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1> login here, with  your username:<?php echo $_SESSION["username"] ."<br> and your password:".  $_SESSION["password"] ?>
    <form method="POST">
    
      <label for ="username">Username:</label>
      <input type="text" name="username" id="username">
      <label for ="password">Password:</label>
       <input type="password" name="password" id="password" >
      <button type="submit" name="login">Login</button>
      <?php
    
      if (isset($_POST["login"])){

        $username=$_POST["username"];
        $password=$_POST["password"];
     
    
        if(empty($username)||(empty($password))){
            echo"username  password khai";
            // return ;
        } 
        elseif(($_COOKIE["username"]==$_POST["username"])&&($_COOKIE["password"]==$_POST["password"]))
        {
        
            $_SESSION["username"]=$_POST["username"];
            $_SESSION["password"]=$_POST["password"];

            header("Location:index.php");

        }
        else{echo"please proceed with your registered username and password";

      } 
       }
       ?>
    </form>
</body>
</html>