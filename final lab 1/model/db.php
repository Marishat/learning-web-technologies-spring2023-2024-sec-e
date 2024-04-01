

<?php
$server = "localhost";
$username = "root";  // database username
$password = "";      // database password
$db_name = "online_shop"; // database name


$conn = mysqli_connect($server, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




    ?>