<?php
// PHP connection to the database using MySQLi extension

$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "firstdatabase_hai";

// Establishing connection
$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

// Check if connection is successful
if ($conn) {
    echo "Connection established successfully.";
} else {
    // Displaying error message if connection fails
    echo "Connection failed: " . mysqli_connect_error();
}
?>
