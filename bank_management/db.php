<?php
$servername = "localhost"; // or your server IP
$username = "root"; // default username
$password = "preety"; // default password for XAMPP, usually empty
$dbname = "bank_management"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
echo "Connected successfully"; // Optional confirmation
?>
