<?php
// Include the database connection file
$host = "localhost";
$username = "root";
$password = "anjalyabin12345";
$db_name = "register";

$con = mysqli_connect($host, $username, $password, $db_name);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($con, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$username = $resultData['username'];
$address = $resultData['address'];
$blood_group = $resultData['blood_group'];
$phone_number= $resultData['phone_number'];
$date= $resultData['date'];
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
    <h2>Edit Data</h2>
    <p>
	    <a href="register.php">Home</a>
    </p>
	
	<form name="edit" method="POST" action="editAction.php">
		<table border="0">
			<tr> 
				<td>USERNAME</td>
				<td><input type="text" name="username" value="<?php echo $username; ?>"></td>
			</tr>
			<tr> 
				<td>ADDress</td>
				<td><input type="text" name="address" value="<?php echo $address; ?>"></td>
			</tr>
			<tr> 
				<td>BLOOD GROUP</td>
				<td><input type="text" name="blood_group" value="<?php echo $blood_group; ?>"></td>
			</tr>
			<tr> 
				<td>PHONE NUMBER</td>
				<td><input type="number" name="phone_number" value="<?php echo $phone_number; ?>"></td>
			</tr>
			<tr> 
			<tr>
			<tr> 
				<td>DATE</td>
				<td><input type="date" name="date" value="<?php echo $date; ?>"></td>
			</tr>
			<tr> 
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>