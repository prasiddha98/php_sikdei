<?php
session_start();
if(isset($_POST["logout"]))
{
    // unset($_SESSION["username"]);
    // unset($_SESSION["pass"]);
    session_destroy();

    header("Location:index.php");
}
?>