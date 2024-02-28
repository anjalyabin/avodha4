<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Database Table Data</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body bgcolor:"#ff0000">
    <div class="container" style=bgcolor:"#FF0000">
       <center> <h1>REGISTRATION DETAILS</h1></center>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>ADDRESS</th>
                    <th>BLOOD GROUP</th>
                    <th>PHONE NUMBER</th>
                    <th>DATE</th>
                    
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
                
                <?php
                $host = "localhost";
                $username = "root";
                $password = "anjalyabin12345";
                $db_name = "register";
                
                $con = mysqli_connect($host, $username, $password, $db_name);
                $query = "SELECT * FROM users"; // Replace with your actual table name
                $result = mysqli_query($con, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>" . $row['blood_group'] . "</td>";
                    echo "<td>" . $row['phone_number'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		
		
                    // Add more columns here
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Include Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>


<?php
$host = "localhost";
$username = "root";
$password = "anjalyabin12345";
$db_name = "register";

$con = mysqli_connect($host, $username, $password, $db_name);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input fields (similar to your existing code)
    // ...
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $address = $_POST['address'];
        $blood_group = $_POST['blood_group'];
        $phone_number = $_POST['phone_number'];
        $date = $_POST['date'];
    
    // Insert data into the 'users' table
    $sql = "INSERT INTO users (username, address, blood_group, phone_number, date)
            VALUES ('$username', '$address', '$blood_group', '$phone_number', NOW())";
            
        

    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }
}
    
    // Close the database connection
    mysqli_close($con);
}

?>