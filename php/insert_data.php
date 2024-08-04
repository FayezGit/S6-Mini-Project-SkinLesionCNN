<?php
// Establish database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "login";
$con = new mysqli($host, $user, $pass, $db);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Extract data from AJAX request
$className = $_POST['className'];
$probability = $_POST['probability'];

// Prepare SQL statement
$sql = "INSERT INTO disease (className, probability) VALUES ('$className', '$probability')";

// Execute SQL statement
if ($con->query($sql) === TRUE) {
    echo "New record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
    // If insertion fails, print an error message
    echo "Something went wrong while inserting data into the database";
}

// Close database connection
$con->close();
?>
