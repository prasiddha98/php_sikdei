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

//radio button

if(isset($_POST["pay"])){
   if(isset($_POST["visaname"])){
    $visaname = $_POST["visaname"];
    echo "$visaname is selected";}
    else{
        echo "please select a payment method";
    }
}

//checkbox
if(isset($_POST["submit"])){
    if(isset($_POST["maths"])){
        $math = $_POST["maths"];
        echo "$math is selected";
    }
    elseif(isset($_POST["science"])){
        $science = $_POST["science"];
        echo "$science is selected";
    }
    elseif(isset($_POST["english"])){
       $english = $_POST["english"];
        echo "$english is selected";
    }
    else{
        echo "please select a subject";
    }
}



//function
//functio  to check if a number is even or odd
function check($number){
    if($number%2==0){
        echo "$number is even";
    }
    else{
        echo "$number is odd";
    }
}
echo check(6);


//string function

//strlen
echo strlen("Hello World"); // 11

//str_word_count
echo str_word_count("Hello World"); // 2

//strrev
echo strrev("Hello World"); // dlroW olleH

//strpos
echo strpos("Hello World", "World"); // 6

//str_replace
echo str_replace("World", "PHP", "Hello World"); // Hello PHP

//strtolower
echo strtolower("HELLO WORLD"); // hello world

//strtoupper
echo strtoupper("hello world"); // HELLO WORLD

//ucfirst
echo ucfirst("hello world"); // Hello world

//ucwords
echo ucwords("hello world"); // Hello World

//explode
echo(explode(" ", "Hello World")); // Array 
print_r(explode(" ", "Hello World")); // Array ( [0] => Hello [1] => World )

//implode
echo implode("-", array("Hello", "World")); // Hello-World

//trim
echo trim(" Hello World        "); // Hello World

//substr
echo substr("Hello World", 6, 10); // World

//str_repeat
echo str_repeat("Hello", 3); // HelloHelloHello

//str_shuffle
echo str_shuffle("Hello World"); // Randomly shuffled string






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
    
    <form action="day2.php" method="post">
        <label for="visa">Visa</label>
        <input type="radio" name="visaname" value="visa">
        <label for="mastercard">Mastercard</label>
        <input type="radio" name="visaname" value="mastercard">
        <label for="paypal">Paypal</label>
        <input type="radio" name="visaname" value="paypal">
        <button type="submit" name="pay">Pay</button>
    </form>

    <form action="day2.php" method="post">
       <label for=maths>Maths</label>
       <input type="checkbox" name="maths" value="Math">
       <label for="science">Science</label>
       <input type="checkbox" name="science" value="Science">
       <label for="english">English</label>
       <input type="checkbox" name="english" value="English">
       <button type="submit" name="submit">Submit</button>
    </form>
    </body>
 </html>