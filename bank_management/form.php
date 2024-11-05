<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $account_number = $_POST['account_number'];
    $balance = $_POST['balance'];

    $sql = "INSERT INTO users (name, email, account_number, balance) VALUES ('$name', '$email', '$account_number', '$balance')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
