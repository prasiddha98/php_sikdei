
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// PHP connection to the database using MySQLi extension

$db_server = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "firstdatabase_hai";

// Establishing connection with exception handling
try{


$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);}

catch (mysqli_sql_exception) {
    echo "Connection failed ";
}
if ($conn) {
        echo "Connection established successfully.";
  }
?>
