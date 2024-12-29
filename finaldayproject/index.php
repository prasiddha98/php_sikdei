<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITENAME</title>
    <style>
        nav ul{
            display:flex; justify-content:center;list-style-type:none; background-color:black;
        }
        nav ul li{
            margin:0 10px; padding:10px; display:block;
        }
        nav ul li a {
            display: block;
            text-decoration: none;
            color: white;
            transition: transform 0.5s ease;
        }
    
        nav ul li:hover > a {
            transform: translate(0, -5px);
            text-shadow: 5px 5px 2px grey;
        }
        .header{
            text-align: center;
            color:red;
        }
   </style>

   
   <div class="header">
   <h1> Welcome to the website</h1>
   </div>
    <div class="container" >
        <nav>
        <ul>
            <li>
                <a href="Home.php" >Home</a>

            </li>
            <li>
                <a href="blogs.php" >Blogs</a>
                
            </li>
         
                <?php
                if(!isset($_SESSION["username"]))
                {
                 ?>

            <li>
                <a href="Register.php" >Register</a>

            </li>
                <li>
                <a href="login.php" >Login</a>
                
            </li>
                <?php }
                
                else{ ?>
                <li style="color:gold;"> 
                    <?php

                   echo" welcome ". $_SESSION["username"];
                    ?>
                </li>
               <li>
               <form method="post" action="logout.php"> 
        <button type="submit" name="logout" style="background-color:red; margin:0px; padding:2px 10px; border:none;color:white">Logout</button>
                  </form>
               </li>
                     <?php

                  }
            
                ?>
               
            
          

        </ul>
    </div>
     </nav>

</body>
</html>