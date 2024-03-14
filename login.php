<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "your_database_name";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Perform a query
$sql = "SELECT * FROM users WHERE username='example_user'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // User found, do something
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Username: " . $row["username"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
    }
} else {
    // User not found
    echo "No user found with that username.";
}

// Close connection
mysqli_close($conn);
?>
