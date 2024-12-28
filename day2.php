<?php
echo "goodmorning, this is day2 of learning php"; 

//isset function
$name="ram";
echo isset($name); //true
echo isset($age); //false

//empty huda true return garxa




//empty function
$name="ram";
echo empty($name); //false
echo empty($age); //true




$username = "";
$password = "";

if(isset($_POST["name"]) && isset($_POST["password"])){
   $username=$_POST["name"];
    $password=$_POST["password"];
    echo "name is $username and password is $password";
    // foreach($_POST as $key => $value){
    //     echo "$Key = $value";
    // }
}
   elseif(empty($username) && empty($password)){
    echo "name is empty";
    echo "password is empty";
}
   else{
    echo"...";
}
?>

<!-- lets create a form-->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
 </head>
 <body>
    

    <form action=day2.php method="post">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name">
      <label for="password">Password:</label>
      <input type="password" name="password"id="password">
      <button type="submit">Login</button>
      <script>alert("login successful")</script>


    </form>
    
 </body>
 </html>