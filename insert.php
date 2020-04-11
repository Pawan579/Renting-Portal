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

$sql = "INSERT INTO data (area, owner, contact,bhk_type,rent)
VALUES ('Jalandhar', 'John', '9695278695','1BHK',6000);";
$sql .= "INSERT INTO data (area, owner, contact,bhk_type,rent)
VALUES ('Phagwara', 'Rajesh', '9695278695','1BHK',6000);";
$sql .= "INSERT INTO data (area, owner, contact,bhk_type,rent)
VALUES ('Jalandhar', 'Mayank', '9695278695','2BHK',6000);";
$sql .= "INSERT INTO data (area, owner, contact,bhk_type,rent)
VALUES ('Ludhiana', 'Jay', '9695278795','3BHK',6000);";
$sql .= "INSERT INTO data (area, owner, contact,bhk_type,rent)
VALUES ('Phagwara', 'Rajesh', '9695788695','3BHK',5000);";
$sql .= "INSERT INTO data (area, owner, contact,bhk_type,rent)
VALUES ('LPU', 'Himanshu', '9695278895','2BHK',5000);";
$sql .= "INSERT INTO data (area, owner, contact,bhk_type,rent)
VALUES ('Law Gate', 'Sachin', '9065895866','1BHK',7000);";
;

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>