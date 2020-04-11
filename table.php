 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Room";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// sql to create table

$sql = "CREATE TABLE data(
area VARCHAR(30) NOT NULL,
owner VARCHAR(30) NOT NULL,
contact varchar(20),
bhk_type VARCHAR(50),
Rent integer(10)

)";
if (mysqli_query($conn, $sql)) {
    echo "Table data created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
