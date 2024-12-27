<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    
        <form action="learn.php" method="post">
            <?php
            if(isset($_SESSION['logged_in'])&&$_SESSION['logged_in']){?>
            <div>
                <h3>You are Logged in as : <?php echo $_SESSION['username'];?></h3>

                <input type="submit" name="logout" value="Logout">
            </div>
               <label for="">Quantity </label>
            <input type="number" name="quantity"><br>
            <input type='submit' name="total">
            <?php }else { ?>

            <label for="">Username</label>
            <input type="text" name="username"><br>
            <label for="">password</label>
            <input type="password" name="Password"><br>
            <input type="submit" value="Login" name="login"><br>

            <?php } ?>
         
        </form>
        
</body>
</html>
<?php
if(isset($_POST['login'])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['logged_in']=true;
    unset($_POST['login']);
    header("Refresh:0");
}

if(isset($_POST['logout'])){
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['logged_in']);
    unset($_POST['logout']);
    echo "<script>alert('logged out successfully');</script>";
    header("Refresh:0");
}


if(isset($_POST['total'])){
// mathi ko chai post method credentials ma use hunxa
// get chai request garna browse garna kei
       $item ="pizza";
       $price =9;
       $total=null;
       $quantity=$_POST["quantity"];
       $total=$price * $quantity;
       $username=$_SESSION['username'];
       unset($_POST['total']);

       echo"Dear {$username}, your total quantity is {$quantity} <br>";
       echo"your total amount for {$quantity}'s {$item}'s is {$total} <br>";
       echo"visit again !!!";
}

?>