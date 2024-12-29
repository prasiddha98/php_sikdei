<?php
include "index.php";
session_start();

if(!isset($_SESSION['username'])){
echo"please register to read content of blogs";}
else{
    echo"welcome to blog.<br> {$_SESSION["username"]}";
?>

<h1>Content Post</h1>
       <form action="blogs.php" method="post">
        <label for="content_title">Content_Title</label>
        <input type="text" name="content_title" id="content_title">
        <label for="content_text">Content_Text</label>
        <div style=  " display: flex;
            justify-content: center;">
        <textarea name="content_text" id="content_text" placeholder="Your text goes here" style="width: 500px; height:150px;"></textarea></div>
        <button type="submit" name="post_content">Post</button>
       </form>
<?php

if(isset($_POST["post_content"])){
    $content_title=$_POST["content_title"];
    $content_text=$_POST["content_text"];
    //header("Location:blogs.php");

   if(empty( $content_title)||(empty($content_text)))
   {
    echo"Error!! Either title or content is missing!!";
   }
   elseif(isset($_SESSION["content_title"])&& isset($_SESSION["content_text"])){
    $_SESSION["content_title"]=$_POST["content_title"];
    $_SESSION["content_text"]=$_POST["content_text"];
    echo"this is the content title {$_SESSION["content_title"] } and content text {$_SESSION["content_text"]}";

    // $_SESSION["username"]=$_POST["username"];
    // $_SESSION["password"]=$_POST["password"];


     }
    else{
          echo"wow ";
    }
    

}
}

?>
