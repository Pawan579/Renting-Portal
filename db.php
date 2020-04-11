<?php
$servername = "localhost";
$username = "root";
$pass = "";
// Create connection
$conn = mysqli_connect($servername, $username,$pass);
// Check connection
if (!$conn) {
echo "Connection failed";
}
else
echo "Connected successfully";
$sql = "CREATE DATABASE Room";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
	echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);

?>