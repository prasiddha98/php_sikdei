<?php
 session_start();
 if(!isset($_SESSION["todolist"])){
    $_SESSION["todolist"]=array();
 }
 
$_SESSION["list"]=$_POST["list"];

echo"todo-list <br>";
$lists=$_POST["list"];
$submit=$_POST["submitlist"];
if(!isset($_POST["submitlist"])){
echo"please enter the item.<br>";}

if(isset($_POST["submitlist"])){
    if(!empty($_POST["list"])){
        array_push($_SESSION["todolist"],$_POST["list"]);
}
    else{
    echo"please enter the item and continue <br> ";
       } 
  
}

if(isset($_POST["delete"])){
    if(!empty($_SESSION["todolist"]))
    {
        array_pop($_SESSION["todolist"]) ;
    }
    else{
          echo"no element left to pop";}
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-dolist</title>
</head>
<body>
    <form action="todolist.php" method="post">
        <label for="list"></label>
        <input type="text" id="list" name="list">
        <button name="submitlist">Submit</button>
        <button name="delete">Delete recent</button>
        <br>
    </form>
</body>
</html>
<?php


foreach($_SESSION["todolist"] as $lists){
    echo" <li> {$lists}<br> </li>" ;
}


?>