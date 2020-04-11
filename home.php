
<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "Room";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM data";
if( isset($_GET['search']) ){
    $area = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM data WHERE Area ='$area'";
}
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Rent</title>
<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<style>
body {
  background-image: url('img.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<body>
<div class="container">
    <h1 text align="center" >Room Rental Search</h1>
<label>Search</label>
<form action="" method="GET">
<input type="text" placeholder="Type area" name="search" required>&nbsp;
<input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary">
</form>
<h2>List of Room</h2>
<table class="table table-striped table-bordered table-hover table-condensed table-sm" id="Main table" style="background-color:rgba(255, 255, 255, 0.4);">
<thead class="thead-dark">
<tr>
<th>Area</th>
<th>Owner</th>
<th>Contact</th>
<th>Room Type</th>
<th>Rent</th>
</tr>
</thead>
<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['area']; ?></td>
    <td><?php echo $row['owner']; ?></td>
    <td><?php echo $row['contact']; ?></td>
    <td><?php echo $row['bhk_type']; ?></td>
    <td><?php echo $row['Rent']; ?></td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>