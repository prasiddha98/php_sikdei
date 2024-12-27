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
      
</body>
</html>