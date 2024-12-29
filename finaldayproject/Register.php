<?php
session_start();


?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
        .form{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form{
            width: 200px;
            max-width: 100%;
        }
</style>
    <div class="form">
    <form method="POST">
    
      <label for ="username">Username:</label>
      <input type="text" name="username" id="username">
      <label for ="password">Password:</label>
       <input type="password" name="password" id="password" >
      <button type="submit" name="register">Register</button>
      <?php
    
      if (isset($_POST["register"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        echo $username;
        echo $password;
        if(empty($username)||(empty($password))){
            echo"username  password khai";
            // return ;
        }
        else{

               
        $_SESSION["username"]=$_POST["username"];
        $_SESSION["password"]=$_POST["password"];



        setcookie('username',$_POST['username'],time()+86400);
        setcookie('password',$_POST['password'],time()+86400);


        header("Location:login.php");


      } 
    }
 

      ?>
        

    </form>
    </div>
 </body>
 </html>
