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

//creating a table

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "myDB1";
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

echo "<br>";

// Creating a table in mysql using php

    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50)
    )";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }

mysqli_close($conn);

?>


