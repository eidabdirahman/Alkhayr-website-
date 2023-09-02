<?php
$servername = "localhost"; // Server name (usually "localhost" for a local server)
$username = "root"; // MySQL username (default is "root" in XAMPP and MAMP)
$password = ""; // MySQL password (default is empty in XAMPP and "root" in MAMP)
$database = "Alkhayr"; // The name of the database you want to connect to

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";

// Close the connection when done
$conn->close();


?>
