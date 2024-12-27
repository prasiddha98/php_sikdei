<?php // this is how we start php
// this is how comment is done in php

echo "ram le khana khayo <br>"; //print stat with new line;<br>
$name="ram"; //variable declaration
echo"{$name}<br>"; //variable print

//data types
 
$name="ram"; //string
$age=10; //integer
$height_in_inch=5.7;    //float
$Active=true; //boolean

//array
$fruits=array("apple","banana","mango");
echo $fruits[0]; //apple
//to add element in array
$fruits[0]="orange";
echo $fruits[0]; //orange
array_push($fruits,"grapes");
echo $fruits[3]; //grapes
//foreach loop
$fruits=array("apple","banana","mango");
foreach($fruits as $fruit){
    echo $fruit;
}
//for push
$fruits=array("apple","banana","mango");
array_push($fruits,"grapes");
foreach($fruits as $fruit){
    echo $fruit;
}

//associative array
$person=array("name"=>"ram","age"=>10);
echo $person["name"]; //ram
echo $person["age"]; //10
//to add element in associative array
$person["name"]='shyam';
echo $person["name"]; //shyam
//for printing multiple key value pair
foreach($person as $key=> $value){
    echo "{$key} is {$value}";
} 

// made form in html part and learning associative array
$credentials = array(
    "ram" => "123",
    "shyam" => "456"
);
$username=$_POST["username"];
$password = $_POST["password"]; //
if(isset($credentials[$username])){
   if ($credentials[$username]===$password){
    echo" The password for {$username} is {$password}";
   }else{
    echo" The password for {$username} is incorrect";
    }
}
else {
    echo "Error: Username '{$username}' does not exist.";
}

//operator
$a=10;
$b=20;
echo $a+$b; //30
echo $a-$b; //-10
echo $a*$b; //200
echo $a/$b; //0.5
echo $a%$b; //10

//increment and decrement
$a++; //11
$a--; //10

//comparison operator
$a=10;
$b=20;
echo $a==$b; //false
echo $a!=$b; //true
echo $a>$b; //false
echo $a<$b; //true
echo $a>=$b; //false
echo $a<=$b; //true


// string operator
$a="ram";
$b="world";
echo "{$a} to {$b} <br>"; //hello to world
echo "dear {$a}, eat your food."; // dear ram, eat your food. 


//get method
$username=$_GET["username"];
echo " This is done through get method. {$username}" ;
//post method
echo $_POST["username"];

$item="apple";
$price=5;
$total=null;
$quantity=$_POST["quantity"];
$total=$price * $quantity;
$username=$_POST["username"];

echo"Dear {$username}, you have bought {$quantity}'s {$item}'s <br>";
echo"And your Grandtotal is {$total}";


//conditional statement
$age=10;
if($age>18){
    echo "you are adult";
}else{
    echo "you are child";
}

//logical operator &&, ||, !
$age=10;
$height=5.7;
if($age>18 && $height>5.5){
    echo "you are adult";
}else{
    echo "you are child";
}
// for || or operator
$age=10;
$height=5.7;
if($age>18 || $height>5.5){
    echo "you are adult";
}else{
    echo "you are child";
}
//for // not operator
$age=10;
$height=5.7;
if(!($age>18)){
    echo "you are child";
}else{
    echo "you are adult";
}

//switch case
$day="monday";
switch($day){
    case "sunday":
        echo "today is holiday";
        break;
    case "monday":
        echo "today is working day";
        break;
    case "tuesday":
        echo "today is working day";
        break;
    case "wednesday":
        echo "today is working day";
        break;
    case "thursday":
        echo "today is working day";
        break;
    case "friday":
        echo "today is working day";
        break;
    case "saturday":
        echo "today is working day";
        break;
    default:
        echo "invalid day";
}

//loop
//for loop
for($i=0;$i<5;$i++){
    echo $i;
}
//while loop
$i=0;
while($i<5){
    echo $i;
    $i++;
}
//do while loop
$i=0;
do{
    echo $i;
    $i++;
}while($i<5);



//function
function add($a,$b){
    return $a+$b;
}
echo add(10,20); //30

//array function
$fruits=array("apple","banana","mango");
echo count($fruits); //3




?>  <!-- this is how we end php --> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Day first covered with basic stuffs!! : this is how cmt is done in html  --> 
     <!-- get and post method-->
    <h2>GET Method</h2>
    <form action="DAY1.PHP" method="GET">
        <label for="name">Name:</label>
        <input type="text" id="name" name="username">
        <button type="submit">Submit with GET</button>
    </form>

    <h2>POST Method</h2>
    <form action="DAY1.PHP" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="username">
        <button type="submit">Submit with POST</button>
    </form>
    <!-- example, learning post method-->
    <form action="DAY1.PHP" method="POST">
    <label for="username">username</label>
    <input type="text" id="username" name="username">
    <label for="quantity">quantity</label>
    <input type="number" id="quantity" name="quantity">
    <button type="submit">Grand_Total</button>

    </form>
    <!--learning associative array-->
 <form action="DAY1.PHP" method="POST">
    <label for="username">username</label>
    <input type="text" id="username" name="username">
    <label for="password">password</label>
    <input type="password" id="password" name="password">
    <button type="submit">La password deu</button>
 </form>   
</body>
</html>