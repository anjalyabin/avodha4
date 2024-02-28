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
// Get id parameter value from URL
$id = $_GET['id'];

// Delete row from the database table
$result = mysqli_query($con, "DELETE FROM users WHERE id = $id");

// Redirect to the main display page (index.php in our case)
header("Location:register.php");
?>