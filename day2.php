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





// sanitize and validate data

//sanitize data
//remove any illegal character from a string
//remove or encode special characters
//remove or encode html tags

if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $username=filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    echo $username;
}
if(isset($_POST["submit"])){
    $age=filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    echo $age;
}


//validate data
//check if the data is in proper format
//check if the data is in proper range
//check if the data is in proper length

if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $username=filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    echo $username;}


//learning cookie

setcookie("name","ram",time() +86400, "/");
setcookie("username","shyam",time() +86400, "/");


// learning session >> a user is assigned a unique session id which is stored in a cookie on the user's computer

// content is moved to file session.php
// if a user succesfully logs inb , we redirect user to this page; day2.php

?>
//signout from here
<?php
session_start();
echo "session name is ". $_SESSION["name"];
echo  "session password is" . $_SESSION["password"];
if(isset($_POST["logout"])){
    session_destroy();
    header("Location:session.php");
    exit;
}

// header("Location:session.php");
// exit;








//server
// echo $_SERVER["PHP_SELF"];
// echo $_SERVER["SERVER_NAME"];
// echo $_SERVER["HTTP_HOST"];
// echo $_SERVER["REQUEST_METHOD"];

foreach($_SERVER as $key => $value){
    echo "$key = $value <br>";
}

//passwword hashing

$password = "password";
$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash;

if(password_verify("ram", $hash)){
    echo "password is correct";
}
else{
    echo "password is incorrect";
}





//inserting opr in database with exception handling
include ("database.php");


try{
$sql = "INSERT INTO table_name(id, Age, user, password) VALUES(3, 20, 'hari', '123123')";
mysqli_query($conn, $sql);
echo "data inserted successfully";
}
catch(mysqli_sql_exception){
    echo "error";
}


mysqli_close($conn);























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


   <h2>investigate cookie</h2>
    <?php
    if(isset($_COOKIE["name"])&& isset($_COOKIE["username"]))
    {
        echo "cookie is set";
        echo $_COOKIE["name"];
        echo $_COOKIE["username"];
    }
    else{
        echo "cookie is not set";
    }
    ?>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
         <!-- file ja sukei hos incase nam change bhayeni server global var le correct banaidinxa(file path hold garxa) -->
      <label for="name">Name:</label>
      <input type="text" name="name" id="name">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password">
      <button type="submit">Login</button>
      <!--<script>alert("login successful")</script>-->


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
    <form action="day2.php" method="post">
       <label for=username>Username</label>
       <input type="text" name="username">
       <label for=age>Age</label>
       <input type="number" name="age">
       <button type="submit" name="submit">Submit</button>
    </form>
    <form action="day2.php" method="post">
    
     <button type="submit" name="logout">LOgout</button>
    </form>


    </body>
 </html>