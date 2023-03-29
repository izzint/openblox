<?php
// dont forget to set a password!
include '../api/private/sqlconn.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $status = substr(htmlspecialchars($_POST['toStatus']), 0, 100);
    $id = $_SESSION['currentID'];

    
    $updateQuery = "UPDATE accounts SET about = '$status' WHERE id = $id";
    mysqli_query($conn, $updateQuery);

    header('Location: /User.php');
    $conn->close();
}

