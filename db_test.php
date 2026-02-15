<?php
// Display errors for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database credentials
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "jyotidarshan";

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connection successful!";
    
    // Check if any tables exist
    $result = $conn->query("SHOW TABLES");
    if ($result->num_rows > 0) {
        echo "<br>Tables in database:<br>";
        while($row = $result->fetch_array()) {
            echo $row[0] . "<br>";
        }
    } else {
        echo "<br>No tables found in database. You may need to import the database structure.";
    }
}

// Close connection
$conn->close();
?>