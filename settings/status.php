<?php
// dont forget to set a password!
$conn = mysqli_connect('localhost', 'root', '', 'openblox');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $status = htmlspecialchars($_POST['toStatus']);
    $id = $_SESSION['currentID'];

    $updateQuery = "UPDATE accounts SET about = '$status' WHERE id = $id";
    mysqli_query($conn, $updateQuery);

    header('Location: /User.php');
    $conn->close();
}

