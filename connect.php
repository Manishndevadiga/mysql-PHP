<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

echo "<br>";

// Creating a database in mysql using php

$sql = "CREATE DATABASE myDB1";
if (mysqli_query($conn, $sql))
     {
        echo "Database created successfully";
     }
 else {
        echo "Error creating database: " . mysqli_error($conn);
       }

mysqli_close($conn);

?>
