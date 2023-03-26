<?php
$conn = mysqli_connect('localhost', 'root', '', 'openblox');
session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['register'])) {
        // Get the user's input
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars(password_hash($_POST['password'], PASSWORD_DEFAULT));

        if (empty($username)) {
            die('Username is required');
        } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
           die('Username can only contain letters, numbers, and underscores');
        } elseif (strlen($username) > 20) {
            die('Username cannot be over 20 Characters');
        } else {
            // Insert the user's information into the database
            $sql = "INSERT INTO accounts (username, password) VALUES ('$username', '$password')";
            mysqli_query($conn, $sql);

            // Redirect the user to the user page
            header('Location: /');
            exit;
        }
    }

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM accounts WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if (empty($password)) {
            echo 'Password is required';
        } elseif (empty($username)) {
            echo 'Username is reqiured.';
        } else {
            if (password_verify($password, $row['password'])) {
                // Create a session
                $_SESSION['username'] = $username;
                $_SESSION['currentID'] = $row['id'];
                $_SESSION['loggedin'] = true;
                header('Location: /User.php');
                exit;
            }
        }
    }
}
?>