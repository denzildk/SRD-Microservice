<?php

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "srd5_1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the view
$sql = "SELECT * FROM vs_weapons";
$result = $conn->query($sql);

// Create an empty array to hold the results
$data = array();

// Loop through each row of the result set
while ($row = $result->fetch_assoc()) {
    // Add each row to the data array
    $data[] = $row;
}

// Close the database connection
$conn->close();

// Encode the data array as JSON and print it
header('Content-Type: application/json');
echo json_encode($data);

?>
